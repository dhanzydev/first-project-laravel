@extends('layouts.app')

@section('title')
Tambah Kategori Buku
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb border-0">
        <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('buku.index') }}"> Buku </a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
    </ol>
</nav>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Kategori Buku</h4>
            <form action="{{ route('buku.store') }}" class="forms-sample" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Buku">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Kategori Buku</label>
                    <select class="form-control" id="category" name="category_id">
                        <option selected>Pilih Kategori Buku</option>
                        @foreach ($kategoriBuku as $id=>$kategori)
                        <option value="{{ $kategori }}">{{ $id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Penulis Buku</label>
                    <input type="text" class="form-control" id="author" name="author"
                        placeholder="Masukkan Penulis Buku">
                </div>
                <div class="form-group">
                    <label for="category">Tahun Terbit Buku</label>
                    <input type="number" class="form-control" id="year" name="year"
                        placeholder="Masukkan Tahun Terbit Buku">
                </div>
                <div class="form-group">
                    <label for="category">Kondisi Buku</label>
                    <select name="condition" id="condition" class="form-control">
                        <option selected>Pilih Kondisi Buku</option>
                        <option value="Bagus">Bagus</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Jumlah Buku</label>
                    <input type="number" class="form-control" id="quantity" name="quantity"
                        placeholder="Masukkan Jumlah Buku">
                </div>
                <div class="form-group">
                    <label for="photo" class="form-label">Foto Buku</label>
                    <input class="form-control" type="file" id="formFile" name="photo">
                </div>
                <div class="form-group">
                    <label for="category">Deskripsi</label>
                    <textarea type="text" class="form-control" style="height: 200px" id="kategori"
                        name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
