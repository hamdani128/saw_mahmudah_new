@extends('partials.app')
@section('content')
@section('title', 'Perhitungan Metode SAW')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Perhitungan Metode SAW</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Modul Metode SAW</a></li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-center">
                        <h4 class="text-white">Data Konversi Nilai Dari Penialai Kriteria dari Alternatif (Data Tim)
                        </h4>
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
                                        @forelse($assesment as $item)
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
                                        @forelse($assesment as $item)
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
                                        @forelse($assesment as $item)
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
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Alternatif</th>
                                            <th>Nama Tim</th>
                                            <th>Hasil Perhtiungan</th>
                                            <th>Rangking</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($assesment as $item)
                                            <tr>
                                                <td>{{ $item->alternatif['kode'] }}</td>
                                                <td>{{ $item->alternatif['nama'] }}</td>
                                                <td class="hasil">
                                                    {{ number_format(($item->nilai1/$C1)*$B1,3) + number_format(($item->nilai2/$C2)*$B2,3) + number_format(($item->nilai3/$C3)*$B3,3) + number_format(($item->nilai4/$C4)*$B4,3) }}
                                                </td>
                                                <td class="Rank"></td>
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
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('metode')
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    $(function () {
        //Get all total values, sort and remove duplicates
        let totalList = $(".hasil")
            .map(function () {
                return $(this).text()
            })
            .get()
            .sort(function (a, b) {
                return a - b
            })
            .reduce(function (a, b) {
                if (b != a[0]) a.unshift(b);
                return a
            }, [])

        //Assign rank
        totalList.forEach((v, i) => {
            $('.hasil').filter(function () {
                return $(this).text() == v;
            }).next().text(i + 1);
        })

    });

</script>
@endsection
