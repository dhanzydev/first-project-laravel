<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriBuku::all();
        return view('admin.buku.kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.buku.kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'category' => 'required',
            'description' => 'required',
        ]);

        $data['slug'] = Str::slug($request->category);

        KategoriBuku::create($data);

        if($data){
        //redirect dengan pesan sukses
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('kategori.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(KategoriBuku $kategori)
    {
        return view('admin.buku.kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriBuku $kategori)
    {

        $request->validate([
            'category' => 'required',
            'description' => 'required',
        ]);

        $post = KategoriBuku::findOrFail($kategori->id);

        $slug = Str::slug($request->category);

        $post->update([
            'category' => $request->category,
            'slug' => $slug,
            'description' => $request->description
        ]);

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disunting!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('kategori.index')->with(['error' => 'Data Gagal Disunting!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KategoriBuku::findOrFail($id);
        $data->delete();
        if($data){
        //redirect dengan pesan sukses
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('kategori.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
