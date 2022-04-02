@extends('layouts.app')

@section('title')
Sunting Kategori Buku
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb border-0">
        <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('kategori.index') }}"> Kategori </a></li>
        <li class="breadcrumb-item active" aria-current="page">Sunting Kategori</li>
    </ol>
</nav>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Sunting Kategori Buku</h4>
            <form  action="{{ route('kategori.update',$kategori->id) }}" class="forms-sample" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="category">Nama Kategori</label>
                    <input type="text" class="form-control" id="kategori" value="{{ old('category', $kategori->category) }}" name="category" placeholder="Masukkan Kategori Buku">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
