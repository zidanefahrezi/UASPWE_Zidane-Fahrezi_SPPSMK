@extends('layouts.backend.app')
@section('title', 'Dashboard')

@push('css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/chart.js/Chart.min.css">
    <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/css/sb-admin-2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/css/sb-admin-2.css"> --}}
@endpush


@section('content')


    <style>
        .test {
            font-family: 'Quicksand' !important;
        }

    </style>

    <!-- Small boxes (Stat box) -->
    <h4 style=" font-family: Lato;font-weight:400px;">Dashboard</h4>
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4 mt-2">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class=" font-weight-bold text-drak-800 text-uppercase mb-1"
                                style="font-size: 17px;font-family: Quicksand">
                                Total Siswa
                            </div>
                            <div class="h5 font-weight-bold text-gray-800 mb-3"
                                style="font-size: 35px; font-family: Quicksand ">{{ $total_siswa }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                    </div>
                    <a href="{{ route('siswa.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class=" font-weight-bold text-drak text-uppercase mb-1"
                                style="font-size: 17px;font-family: Quicksand">
                                Total Kelas
                            </div>
                            <div class="h5 font-weight-bold text-gray-800 mb-3"
                                style="font-size: 35px;font-family: Quicksand">{{ $total_kelas }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-warning"></i>
                        </div>
                    </div>
                    <a href="{{ route('kelas.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class=" font-weight-bold text-drak text-uppercase mb-1"
                                style="font-size: 17px;font-family: Quicksand">
                                Total Petugas
                            </div>
                            <div class="h5 font-weight-bold text-gray-800 mb-3"
                                style="font-size: 35px;font-family: Quicksand">
                                {{ $total_petugas }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-success"></i>
                        </div>
                    </div>
                    <a href="{{ route('petugas.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class=" font-weight-bold text-drak text-uppercase mb-1"
                                style="font-size: 17px;font-family: Quicksand">
                                Total Admin
                            </div>
                            <div class="h5 font-weight-bold text-gray-800 mb-3"
                                style="font-size: 35px;font-family: Quicksand">{{ $total_admin }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-secret fa-2x text-info"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin-list.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>


        {{-- <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $total_siswa }}</h3>

        <p class="test">Siswa</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <a href="{{ route('siswa.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div> --}}
        <!-- ./col -->
        <!-- ./col -->
        {{-- <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $total_kelas }}</h3>

                    <p>Kelas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-school"></i>
                </div>
                <a href="{{ route('kelas.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div> --}}
        <!-- ./col -->

    </div>
    <!-- /.row -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header bg-success text-white">Siswa</div>
                    <div class="card-body">
                        <canvas id="canvas" height="200" width="500"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/chart.js/Chart.min.js">
    </script>
    <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/js/sb-admin-2.min.js"></script>
    <script src="https://unpkg.com/typeit@8.2.0/dist/index.umd.js"></script>
    <script>
        var ctx = document.getElementById("canvas").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Siswa Laki-laki", "Siswa Perempuan"],
                datasets: [{
                    label: '',
                    data: [
                        {!! $siswa_laki_laki !!},
                        {!! $siswa_perempuan !!},
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endpush
