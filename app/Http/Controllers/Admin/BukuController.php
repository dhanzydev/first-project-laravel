<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\KategoriBukuController;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::with('kategori')->get();
        return view('admin.buku.buku.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriBuku = DB::table('categories')->pluck('id','category');
        return view('admin.buku.buku.add', compact('kategoriBuku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'condition' => 'required',
            'quantity' => 'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'description' => 'required'
        ]);

        $photo = $request->file('photo')->store('public/buku');
        $slug = Str::slug($request->title);
        
        $post = Buku::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'condition' => $request->condition,
            'quantity' => $request->quantity,
            'photo' => $photo,
            'description' => $request->description,
            'slug' => $slug
        ]);

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('buku.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        $kategoriBuku = DB::table('categories')->pluck('id','category');
        return view('admin.buku.buku.edit', compact('buku', 'kategoriBuku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'condition' => 'required',
            'quantity' => 'required',
            'photo' => 'image|mimes:jpg,png,jpeg|max:2048',
            'description' => 'required'
        ]);


        $slug = Str::slug($request->title);

        $post = Buku::findOrFail($buku->id);

        if ($request->file('photo') == "") {
            $post->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'author' => $request->author,
                'year' => $request->year,
                'condition' => $request->condition,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'slug' => $slug
            ]);
        }else{
            Storage::disk('local')->delete($buku->photo);
            $photo = $request->file('photo')->store('public/buku');
            $post->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'author' => $request->author,
                'year' => $request->year,
                'condition' => $request->condition,
                'quantity' => $request->quantity,
                'photo' => $photo,
                'description' => $request->description,
                'slug' => $slug
            ]);
        }

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disunting!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('buku.index')->with(['error' => 'Data Gagal Disunting!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $post = Buku::findOrFail($buku->id);
        Storage::disk('local')->delete($buku->photo);
        $post->delete();
        
        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('buku.index')->with(['error' => 'Data Gagal Dihapus!']);
        }

    }
}
