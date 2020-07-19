@extends('partials.app')
@section('content')
@section('title', 'Dashboard')

<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
                <h4 class="page-title">Home</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="card tilebox-one text-white">
                <div class="card-body bg-info">
                    <i class=' dripicons-cart float-right text-white'></i>
                    <h6 class="text-uppercase mt-0">Alternatif</h6>
                    <h2 class="my-2" id="active-users-count">4</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-nowrap text-white">Data Alternatif</span>
                    </p>
                </div> <!-- end card-body-->
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="card tilebox-one text-white">
                <div class="card-body bg-success">
                    <i class=' dripicons-cart float-right'></i>
                    <h6 class="text-uppercase mt-0">Kriteria</h6>
                    <h2 class="my-2" id="active-users-count">4</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-nowrap text-white">Data Kriteria</span>
                    </p>
                </div> 
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="card tilebox-one text-white">
                <div class="card-body bg-danger">
                    <i class='dripicons-shopping-bag float-right'></i>
                    <h6 class="text-uppercase mt-0">Penilaian (Assestmnet)</h6>
                    <h2 class="my-2" id="active-users-count">4</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-nowrap text-white">Penilaian</span>  
                    </p>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Sistem Pendukung Keputusan Menentukan Produktivitas Tim Terbaik </h3>
            <h3>Pada Project Integrasi Digitalisasi SPBU Pada PT Telkom Akses Medan</h3>
            <h3>Menggunakan Metode SAW (Simple Additive Waighting)</h3>
        </div>
    </div>

   

</div>


@endsection
