@extends('partials.app')
@section('content')
@section('title', 'Detail Tim')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Detail Alternatif</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Modul Alternatif</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row mb-2">
      <div class="col-md-3">
          <a href="{{ url('/alternatif') }}" class="btn btn-primary"><i class="uil-arrow-circle-left"></i> Kembali Data Tim</a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-10">
                          <h5>Anggota untuk Tim : {{ $alternatif->nama }} </h5>
                      </div>
                  </div>
                  <div class="row">
                    <button class="btn btn-md btn-info"  data-toggle="modal" data-target="#add_surat"><i class="uil-file-plus-alt"></i>Tambah Data</button>
                  </div>
              </div>
              <div class="card-body">
                  <div class="col-md-12">
                      <div class="table-responsive">
                          <table id="basic-datatable" class="table dt-responsive nowrap">
                              <thead>
                                  <tr>
                                      <th>Nama</th>
                                      <th>Tindakan</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @forelse ($detail as $item)
                                  <tr>
                                      <td>{{ $item->nama }}</td>
                                      <td class="row">
                                          <div class="d-flex mr-1 mb-1">
                                              <a href="" class="btn btn-md btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                          </div>
                                          <div class="d-flex mr-1 mb-1">
                                              <a href="" class="btn-md btn btn-danger"  onclick="return confirm('Yakin Data Akan Dihapus ?')"  data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>               
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

    <!-- /.row -->
    <!-- Main row -->
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>

<div class="modal fade" id="add_surat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('create-detail', $alternatif) }}" method="POST" >
              {{ csrf_field() }}
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Anggota</label>
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
@endsection
