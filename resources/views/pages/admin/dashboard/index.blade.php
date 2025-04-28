@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div
            class="alert alert-primary alert-dismissible"
            role="alert"
        >
            <h4 class="alert-heading d-flex align-items-center flex-wrap gap-1">
                Selamat Datang di Website Sekolah SMKN 10 Makassar
            </h4>
            <hr>
        </div>
        <div class="row g-6">
            <!-- Card Border Shadow -->
            <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="icon-base bx bx-building icon-lg"></i>
                                </span>
                            </div>
                            <h4 class="mb-0">{{ $countJurusan }}</h4>
                        </div>
                        <p class="mt-5">Jumlah Jurusan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-warning h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class="icon-base bx bx-chalkboard icon-lg"></i>
                                </span>
                            </div>
                            <h4 class="mb-0">0</h4>
                        </div>
                        <p class="mt-5">Jumlah Guru</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-danger h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                                <span class="avatar-initial rounded bg-label-danger">
                                    <i class="icon-base bx bx-user icon-lg"></i>

                                </span>
                            </div>
                            <h4 class="mb-0">0</h4>
                        </div>
                        <p class="mt-5">Jumlah Siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                                <span class="avatar-initial rounded bg-label-info"><i
                                        class="icon-base bx bx-time-five icon-lg"
                                    ></i></span>
                            </div>
                            <h4 class="mb-0">0</h4>
                        </div>
                        <p class="mt-5">Jadwal Mapel</p>
                    </div>
                </div>
            </div>
            <!--/ Card Border Shadow -->
        </div>
    </div>
@endsection
