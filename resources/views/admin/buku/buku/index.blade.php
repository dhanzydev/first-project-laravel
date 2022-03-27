@push('addon-style')
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 1350px;
    }

    .close {
        color: black;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

</style>
@endpush

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
            <div class="card-title">
                <h4>Daftar Buku</h4>
                <div class="text-right">
                    <a href="{{ route('buku.create') }}" class="btn btn-primary btn-icon-text">
                        <i class="mdi mdi-plus btn-icon-prepend"></i>
                        Tambah Buku
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" id="kategori">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Foto</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Status</th>
                            <th>Jumlah Buku</th>
                            <th>Deskripsi</th>
                            <th>Kondisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->title }}</td>
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
                            <td>{{ $value->description }}</td>
                            @if ($value->status == 'Bagus')
                            <td>
                                <div class="badge badge-success">Bagus</div>
                            </td>
                            @else
                            <td>
                                <div class="badge badge-danger">Rusak</div>
                            </td>
                            @endif
                            <td>
                                <button type="submit" class="btn btn-danger btn-icon-text py-3">
                                    <i class="mdi mdi-delete-forever btn-icon-prepend"></i>
                                    Hapus
                                </button>
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

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>
@endpush
