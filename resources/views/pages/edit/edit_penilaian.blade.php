@extends('partials.app')
@section('content')
@section('title', 'Edit Data')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Data Penilaian</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Modul Penilaian</a></li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-2">
                <a href="{{ url('/assesment') }}" class="btn btn-primary"><i class="uil-arrow-circle-left"></i> Kembali</a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <h5>Update Data</h5>
                    </div>
                    <div class="card-body">
                        <form action="/assesment/update/{{ $assesment->id }}" method="POST" >
                            @csrf
                              <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Pilih Kode Tim</label>
                                              <div class="input-group">                                    
                                                  <select name="alternatif_id" id="kode_tim" required class="form-control" data-dependent="nama">
                                                      <option disabled>Pilih Kode Tim :</option>
                                                      @foreach ($alternatif as $cs)
                                                          <option value="{{ $cs->id }}" {{ $cs->id == $assesment->alternatif_id ? 'selected' : '' }}>{{ $cs->kode }}</option>
                                                      @endforeach
                                                  </select>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Nama Tim</label>
                                              <div class="input-group">
                                                  <input type="text" class="form-control" name="nama" id="nama_tim" disabled value="{{ $assesment->alternatif->nama }}">
                                              </div>                         
                                          </div>
                                      </div>
                              </div>
              
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Target Pencapaian Secara Tim (K1)</label>
                                          <div class="input-group">                                    
                                              <input type="text" class="form-control" name="c1" id="c1" value="{{ $assesment->c1 }}">
                                            </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Nilai Konversi</label>
                                          <div class="input-group">                                    
                                              <input type="text" class="form-control" name="nilai1" id="nilai1" value="{{ $assesment->nilai1 }}">
                                            </div>
                                      </div>
                                  </div>
                              </div>
              
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Tingkat Kedisiplinan Pekerja Secara Tim (K2)</label>
                                          <div class="input-group"> 
                                              @php
                                                  $k2 = ['Sangat Baik','Baik','Cukup'];
                                              @endphp                                   
                                              <select name="c2" id="select1" required class="form-control" data-dependent="nilai2">
                                                  <option disabled>Pilih :</option>
                                                  @foreach ($k2 as $item)
                                                      <option value="{{ $item }}" {{ $item == $assesment->c2 ? 'selected' : '' }}>{{ $item }}</option>
                                                  @endforeach
                                              </select>
                                            </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Nilai Konversi</label>
                                          <div class="input-group">                                    
                                              <input type="text" class="form-control" name="nilai2" id="nilai2" value="{{ $assesment->nilai2 }}">
                                            </div>
                                      </div>
                                  </div>
                              </div>
              
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Penilaian Kuliatas Pekerjaan Yang dilakuakan Secara Tim (K3)</label>
                                          <div class="input-group">                                    
                                              <input type="text" class="form-control" name="c3" id="c3" value="{{ $assesment->c3 }}">
                                            </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Nilai Konversi</label>
                                          <div class="input-group">                                    
                                              <input type="text" class="form-control" name="nilai3" id="nilai3" value="{{ $assesment->nilai3 }}">
                                            </div>
                                      </div>
                                  </div>
                              </div>
              
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Kerja sama dan Kekompakkan Secara Tim (K4)</label>
                                          <div class="input-group">                       
                                              <select name="c4" id="select2" required class="form-control" data-dependent="nila4">
                                                <option disabled>Pilih :</option>
                                                @foreach ($k2 as $item)
                                                    <option value="{{ $item }}" {{ $item == $assesment->c4 ? 'selected' : '' }}>{{ $item }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Nilai Konversi</label>
                                          <div class="input-group">                                    
                                              <input type="text" class="form-control" name="nilai4" id="nilai4" value="{{ $assesment->nilai4 }}">
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
    
    </div>
</section>  

@section('penilaian')
<script>
    $("#kode_tim").change(function(e){
        $.get('/alternatif/nama_tim/'+ e.target.value).then(function(response){
            $("#nama_tim").val(response);
        })
    })

    $("#c1").keyup(function() {
    var value = $( this ).val();
    var nilai1;
    if (value >= 7){
        nilai1 = 8
    }else if (value >= 5) {
        nilai1 = 7
    } else if (value >= 0 ) {
        nilai1 = 6
    }
    $( "#nilai1" ).val(nilai1);
  })

  $("#select1").change(function(){
      var bil;
      if($("#select1 option:selected").text() == "Sangat Baik"){
        bil = 9
      }else if ($("#select1 option:selected").text() == "Baik"){
        bil = 8
      }else if ($("#select1 option:selected").text() == "Cukup"){
        bil = 6
      }
     $("#nilai2").val(bil);
  })

  $("#c3").keyup(function(e) {
    var bil3 = $(e.target).val();
    var nilai3;
    if (bil3 < 60){
        nilai3 = 5;
    }else if (bil3 < 70){
        nilai3 = 7;
    } else if (bil3 < 80){
        nilai3 = 8;
    } else if (bil3 < 90){
        nilai3 = 9;
    } else if (bil3 > 90){
        nilai3 = 10;
    }
    $("#nilai3").val(nilai3);
  })

  $("#select2").change(function(){
      var bil;
      if($("#select2 option:selected").text() == "Sangat Baik"){
        bil = 9
      }else if ($("#select2 option:selected").text() == "Baik"){
        bil = 8
      }else if ($("#select2 option:selected").text() == "Cukup"){
        bil = 6
      }
     $("#nilai4").val(bil);
  })

</script>
    
@endsection

@endsection
