@push('addon-style')

@extends('layouts.app')

@section('title')
Buku
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb border-0">
        <li class="breadcrumb-item active" aria-current="page">Buku</li>
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
            <a href="{{ route('buku.create') }}" class="btn btn-primary btn-icon-text mb-3">
                <i class="mdi mdi-plus btn-icon-prepend"></i>
                Tambah Buku
            </a>
            <div class="table-responsive">
                <table class="table table-striped" id="buku">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Kategori</th>
                            <th>Foto</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Status</th>
                            <th>Jumlah Buku</th>
                            <th>Kondisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->kategori->category }}</td>
                            <td><img src="{{ Storage::url($value->photo) }}" height="100px" width="100px" alt=""></td>
                            <td>{{ $value->author }}</td>
                            <td>{{ $value->year }}</td>
                            @if ($value->status == 'Tersedia')
                            <td>
                                <div class="badge badge-success">Tersedia</div>
                            </td>
                            @else
                            <td>
                                <div class="badge badge-danger">Tidak Tersedia</div>
                            </td>
                            @endif
                            <td>{{ $value->quantity }}</td>
                            @if ($value->condition == 'Bagus')
                            <td>
                                <div class="badge badge-success">Bagus</div>
                            </td>
                            @else
                            <td>
                                <div class="badge badge-danger">Rusak</div>
                            </td>
                            @endif
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin ingin mengahpus data?')"
                                    action="{{ route('buku.destroy',$value->id) }}" method="post">
                                    <a href="{{ route('buku.edit',$value->id) }}"
                                        class="btn btn-warning btn-icon-text py-3">
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
        $('#buku').DataTable({
            "sScrollX": "100%",
        "sScrollXInner": "110%",
        "bScrollCollapse": true
        });
    });

</script>
@endpush
