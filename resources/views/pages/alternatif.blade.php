@extends('partials.app')
@section('content')
@section('title', 'Modul Alternatif')

<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Modul Alternatif</a></li>
                        <li class="breadcrumb-item active">Alternatif</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Tim</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-md btn-info"  data-toggle="modal" data-target="#add_surat"><i class="uil-file-plus-alt"></i>Tambah Data</button>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($alternatif as $item)
                                    <tr>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td class="row">
                                            <div class="d-flex mr-1 mb-1">
                                                <a href="/edit/alternatif/{{$item->id}}" class="btn btn-md btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="uil-edit"></i></a>
                                            </div>
                                            <div class="d-flex mr-1 mb-1">
                                                <a href="/delete/alternatif/{{$item->id}}" class="btn-md btn btn-danger"  onclick="return confirm('Yakin Data Akan Dihapus ?')"  data-toggle="tooltip" data-placement="top" title="Hapus"><i class="uil-prescription-bottle"></i></a>               
                                            </div>
                                            <div class="d-flex mr-1 mb-1">
                                                <a href="/add_detail_alternatif/{{$item->id}}" class="btn-md btn btn-success"    data-toggle="tooltip" data-placement="top" title="Buat Detail Anggota"><i class="uil-users-alt"></i></a>               
                                            </div>
                                        </td>
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

<div class="modal fade" id="add_surat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tim</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ url('/alternatif-create') }}" method="POST" >
              {{ csrf_field() }}
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Kode Alternatif</label>
                                <div class="input-group">                                    
                                    <input type="text" class="form-control" name="kode">
                                  </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Nama Tim</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama">
                                </div>                         
                            </div>
                        </div>
                </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>

            </form>
        </div>
      </div>
    </div>
</div>
@section('alternatif')
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>

<!-- third party js -->
<script src="assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="assets/js/vendor/dataTables.bootstrap4.js"></script>
<script src="assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="assets/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="assets/js/vendor/dataTables.buttons.min.js"></script>
<script src="assets/js/vendor/buttons.bootstrap4.min.js"></script>
<script src="assets/js/vendor/buttons.html5.min.js"></script>
<script src="assets/js/vendor/buttons.flash.min.js"></script>
<script src="assets/js/vendor/buttons.print.min.js"></script>
<script src="assets/js/vendor/dataTables.keyTable.min.js"></script>
<script src="assets/js/vendor/dataTables.select.min.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="assets/js/pages/demo.datatable-init.js"></script>
@endsection


@endsection
