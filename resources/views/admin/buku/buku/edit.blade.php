@extends('layouts.app')

@section('title')
Sunting Buku
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb border-0">
        <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('buku.index') }}"> Buku </a></li>
        <li class="breadcrumb-item active" aria-current="page">Sunting Buku</li>
    </ol>
</nav>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Kategori Buku</h4>
            <form action="{{ route('buku.update',$buku->id) }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="category">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $buku->title }}" placeholder="Masukkan Judul Buku">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Kategori Buku</label>
                    <select class="form-control" id="category" name="category_id">
                        <option selected>Pilih Kategori Buku</option>
                        @foreach ($kategoriBuku as $kategori=>$id)
                            <option value="{{ $id }}" {{ $id == $buku->category_id ? 'selected' : '' }}>{{ $kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Penulis Buku</label>
                    <input type="text" class="form-control" id="author" value="{{ $buku->author }}" name="author"
                        placeholder="Masukkan Penulis Buku">
                </div>
                <div class="form-group">
                    <label for="category">Tahun Terbit Buku</label>
                    <input type="number" class="form-control" id="year" value="{{ $buku->year }}" name="year"
                        placeholder="Masukkan Tahun Terbit Buku">
                </div>
                <div class="form-group">
                    <label for="category">Kondisi Buku</label>
                    <select name="condition" id="condition" class="form-control">
                        <option selected>Pilih Kondisi Buku</option>
                        <option value="Bagus" {{ $buku->condition == "Bagus" ? 'selected' : '' }}>Bagus</option>
                        <option value="Rusak" {{ $buku->condition == "Rusak" ? 'selected' : ''}}>Rusak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Jumlah Buku</label>
                    <input type="number" class="form-control" id="quantity" value="{{ $buku->quantity }}" name="quantity"
                        placeholder="Masukkan Jumlah Buku">
                </div>
                <p>Foto Buku Sebelumnya</p>
                <img src="{{ Storage::url($buku->photo) }}" class="img-fluid w-25 h-25 mb-3" alt="">
                <div class="form-group">
                    <label for="photo" class="form-label">Foto Buku</label>
                    <input class="form-control" type="file" id="formFile" name="photo">
                </div>
                <div class="form-group">
                    <label for="category">Deskripsi</label>
                    <textarea type="text" class="form-control" style="height: 200px" id="kategori"
                        name="description">{{ $buku->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
