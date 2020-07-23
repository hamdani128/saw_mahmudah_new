@extends('partials.app')
@section('content')
@section('title', 'Edit Data')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Data Alternatif</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Modul Alternatif</a></li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row mb-2">
        <div class="col-lg-2">
            <a href="{{ url('/alternatif') }}" class="btn btn-primary"><i class="uil-arrow-circle-left"></i> Kembali</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h5>Update Data</h5>
                </div>
                <div class="card-body">
                    <form action="/update/alternatif/{{ $alternatif->id }}" method="POST">
                        {{ csrf_field() }}
                          <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="">Kode Alternatif</label>
                                          <div class="input-group">                                    
                                              <input type="text" class="form-control" name="kode" value="{{ $alternatif->kode }}">
                                            </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="">Nama Tim</label>
                                          <div class="input-group">
                                              <input type="text" class="form-control" name="nama" value="{{ $alternatif->nama }}">
                                          </div>                         
                                      </div>
    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">update Data</button>
                                  </div>
                          </div>
                      </form>
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
