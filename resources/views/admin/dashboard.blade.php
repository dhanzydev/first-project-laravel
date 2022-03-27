@extends('layouts.app')

@section('title')
Dashboard Admin
@endsection

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb border-0">
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</nav>
<div class="col-md-6 col-lg-12 grid-margin transparent">
    <div class="row">
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card border card-tale">
                <div class="card-body mb-4">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-4">Jumlah Buku</h4>
                            <p class="fs-30">4006</p>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-primary btn-rounded mdi mdi-book"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card border card-tale">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-4">Jumlah Pinjaman Buku</h4>
                            <p class="fs-30">4006</p>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-primary btn-rounded mdi mdi-account"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card border card-tale">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-4">Jumlah Anggota Perpustakaan</h4>
                            <p class="fs-30">4006</p>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-primary btn-rounded mdi mdi-account-multiple"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card border card-tale">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-4">Jumlah Pengurus Perpustakan</h4>
                            <p class="fs-30">4006</p>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-primary btn-rounded mdi mdi-account-key"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Statistik Pinjaman Buku</h4>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Statistik Pertumbuhan Anggota</h4>
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Buku Baru</p>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="pl-0  pb-2 border-bottom">Judul Buku</th>
                                    <th class="border-bottom pb-2">Kategori</th>
                                    <th class="border-bottom pb-2">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">Kentucky</td>
                                    <td>
                                        <p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p>
                                    </td>
                                    <td class="text-muted">65</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Pengguna Baru</p>
                    <ul class="icon-data-list">
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">Isabella Becker</p>
                                    <p class="mb-0">Sales dashboard have been created</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">Adam Warren</p>
                                    <p class="mb-0">You have done a great job #TW111</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">Leonard Thornton</p>
                                    <p class="mb-0">Sales dashboard have been created</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">George Morrison</p>
                                    <p class="mb-0">Sales dashboard have been created</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">Ryan Cortez</p>
                                    <p class="mb-0">Herbs are fun and easy to grow.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                <div class="col-md-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Pinjaman Buku Baru</p>
                    <ul class="icon-data-list">
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">Isabella Becker</p>
                                    <p class="mb-0">Sales dashboard have been created</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">Adam Warren</p>
                                    <p class="mb-0">You have done a great job #TW111</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">Leonard Thornton</p>
                                    <p class="mb-0">Sales dashboard have been created</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">George Morrison</p>
                                    <p class="mb-0">Sales dashboard have been created</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div>
                                    <p class="text-info mb-1">Ryan Cortez</p>
                                    <p class="mb-0">Herbs are fun and easy to grow.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
{{-- SCRIPT STATISTIK PINJAMAN BUKU --}}
<script>
    $(function () {
        /* ChartJS
         * -------
         * Data and config for chartjs
         */
        'use strict';
        var data = {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            datasets: [{
                label: 'Jumlah Buku',
                data: [5, 1, 10, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1,
                fill: false
            }]
        };
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };

        // Get context with jQuery - using jQuery's .get() method.
        if ($("#barChart").length) {
            var barChartCanvas = $("#barChart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });

</script>

{{-- STATISTIK PERTUMBUHAN ANGGOTA --}}

<script>
    var data = {
        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
        datasets: [{
            label: 'Jumlah Anggota',
            data: [5, 100, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: false
        }]
    };
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false
        },
        elements: {
            point: {
                radius: 0
            }
        }

    };
    if ($("#lineChart").length) {
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: data,
            options: options
        });
    }

</script>
@endpush
