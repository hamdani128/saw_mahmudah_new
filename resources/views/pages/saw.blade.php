@extends('partials.app')
@section('content')
@section('title', 'Perhitungan Metode SAW')

<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Modul Metode SAW</a></li>
                        <li class="breadcrumb-item active">Perhitungan</li>
                    </ol>
                </div>
                <h4 class="page-title">Perhitungan Metode SAW</h4>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-center">
                    <h4 class="text-white">Data Konversi Nilai Dari Penialai Kriteria dari Alternatif (Data Tim)</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode Alternatif</th>
                                        <th>Nama Tim</th>
                                        <th>Penilaian 1 (C1)</th>
                                        <th>Penilaian 2 (C2)</th>
                                        <th>Penilaian 3 (C3)</th>
                                        <th>Penilaian 4 (C4)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($assesment as $item)
                                    <tr>
                                        <td>{{ $item->alternatif['kode'] }}</td>
                                        <td>{{ $item->alternatif['nama'] }}</td>
                                        <td>{{ $item->nilai1 }}</td>
                                        <td>{{ $item->nilai2 }}</td>
                                        <td>{{ $item->nilai3 }}</td>
                                        <td>{{ $item->nilai4 }}</td>
                                    </tr>
                                @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak Ada Data</td>
                                        </tr>
                                @endforelse
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-center">
                    <h4 class="text-white">Data Matriks Normalisasi</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode Alternatif</th>
                                        <th>Nama Tim</th>
                                        <th>(C1)</th>
                                        <th>(C2)</th>
                                        <th>(C3)</th>
                                        <th>(C4)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($assesment as $item)
                                    <tr>
                                        <td>{{ $item->alternatif['kode'] }}</td>
                                        <td>{{ $item->alternatif['nama'] }}</td>
                                        <td>{{ number_format($item->nilai1/$C1,2) }}</td>
                                        <td>{{ number_format($item->nilai2/$C2,2) }}</td>
                                        <td>{{ number_format($item->nilai3/$C3,2) }}</td>
                                        <td>{{ number_format($item->nilai4/$C4,2) }}</td>
                                    </tr>
                                @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak Ada Data</td>
                                        </tr>
                                @endforelse
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-center">
                    <h4 class="text-white">Pembobotan Kriteria Dari Matrik Normalisasi</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode Alternatif</th>
                                        <th>Nama Tim</th>
                                        <th>(C1)</th>
                                        <th>(C2)</th>
                                        <th>(C3)</th>
                                        <th>(C4)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($assesment as $item)
                                    <tr>
                                        <td>{{ $item->alternatif['kode'] }}</td>
                                        <td>{{ $item->alternatif['nama'] }}</td>
                                        <td>{{ number_format(($item->nilai1/$C1)*$B1,3) }}</td>
                                        <td>{{ number_format(($item->nilai2/$C2)*$B2,3) }}</td>
                                        <td>{{ number_format(($item->nilai3/$C3)*$B3,3) }}</td>
                                        <td>{{ number_format(($item->nilai4/$C4)*$B4,3) }}</td>
                                    </tr>
                                @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak Ada Data</td>
                                        </tr>
                                @endforelse
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-center">
                    <h4 class="text-white">Hasil Metode Perhitungan</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode Alternatif</th>
                                        <th>Nama Tim</th>
                                        <th>Hasil Perhtiungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($assesment as $item)
                                    <tr>
                                        <td>{{ $item->alternatif['kode'] }}</td>
                                        <td>{{ $item->alternatif['nama'] }}</td>
                                        <td>{{ number_format(($item->nilai1/$C1)*$B1,3) + number_format(($item->nilai2/$C2)*$B2,3) + number_format(($item->nilai3/$C3)*$B3,3) + number_format(($item->nilai4/$C4)*$B4,3) }}</td>
                                    </tr>
                                @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak Ada Data</td>
                                        </tr>
                                @endforelse
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
