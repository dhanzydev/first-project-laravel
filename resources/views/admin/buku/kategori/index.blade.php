@extends('layouts.app')

@section('title')
Kategori Buku
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb border-0">
        <li class="breadcrumb-item active" aria-current="page">Kategori</li>
    </ol>
</nav>

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <p class="messages">{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert">
    <p>${{ $message }}</p>
</div>
@endif

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Daftar Kategori Buku</h4>
                <div class="text-right">
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-icon-text">
                        <i class="mdi mdi-plus btn-icon-prepend"></i>
                        Tambah Kategori
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" id="kategori">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Slug</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $k => $data)
                        <tr>
                            <td>{{ $k+1 }}</td>
                            <td>{{ $data->category }}</td>
                            <td>{{ $data->slug }}</td>
                            <td>{{ $data->description }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin ingin mengahpus data?')" action="{{ route('kategori.destroy',$data->id) }}" method="post">
                                    <a href="{{ route('kategori.edit',$data->id) }}" class="btn btn-warning btn-icon-text py-3">
                                        <i class="mdi mdi-border-color btn-icon-prepend"></i>
                                        Sunting
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-text py-3">
                                        <i class="mdi mdi-delete-forever btn-icon-prepend"></i>
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script>
    $(document).ready(function () {
        $('#kategori').DataTable();
    });

</script>
@endpush
