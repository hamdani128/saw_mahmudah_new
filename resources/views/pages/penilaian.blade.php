@extends('partials.app')
@section('content')
@section('title', 'Penilaian')

<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Modul Assesment</a></li>
                        <li class="breadcrumb-item active">Assesment</li>
                    </ol>
                </div>
                <h4 class="page-title">Assesment ( Penilaian )</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-2">
                        <button class="btn btn-md btn-info"  data-toggle="modal" data-target="#add_surat"><i class="uil-file-plus-alt"></i>Tambah Data</button>
                    </div> 
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode Alternatif</th>
                                        <th>Nama Tim</th>
                                        <th>Penilaian 1 (C1)</th>
                                        <th>Penilaian 2 (C2)</th>
                                        <th>Penilaian 3 (C3)</th>
                                        <th>Penilaian 4 (C4)</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($assesment as $item)
                                    <tr>
                                        <td>{{ $item->alternatif['kode'] }}</td>
                                        <td>{{ $item->alternatif['nama'] }}</td>
                                        <td>{{ $item->c1 }}</td>
                                        <td>{{ $item->c2 }}</td>
                                        <td>{{ $item->c3 }}</td>
                                        <td>{{ $item->c4 }}</td>
                                        <td class="row">
                                            <div class="d-flex mr-1 mb-1">
                                                <a href="/edit/assesment/{{$item->id}}" class="btn btn-md btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="uil-edit"></i></a>
                                            </div>
                                            <div class="d-flex mr-1 mb-1">
                                                <a href="/delete/assesment/{{$item->id}}" class="btn-md btn btn-danger"  onclick="return confirm('Yakin Data Akan Dihapus ?')"  data-toggle="tooltip" data-placement="top" title="Hapus"><i class="uil-prescription-bottle"></i></a>               
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
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Assesment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" >
              {{ csrf_field() }}

                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pilih Kode Tim</label>
                                <div class="input-group">                                    
                                    <select name="alternatif_id" id="kode_tim" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih Kode Tim :</option>
                                        @foreach ($alternatif as $cs)
                                            <option value="{{ $cs->id }}" >{{ $cs->kode }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Tim</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama" id="nama_tim" disabled>
                                </div>                         
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Target Pencapaian Secara Tim (K1)</label>
                            <div class="input-group">                                    
                                <input type="text" class="form-control" name="c1" id="c1">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nilai Konversi</label>
                            <div class="input-group">                                    
                                <input type="text" class="form-control" name="nilai1" id="nilai1">
                              </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tingkat Kedisiplinan Pekerja Secara Tim (K2)</label>
                            <div class="input-group">                                    
                                <select name="c2" id="select1" required class="form-control" data-dependent="nilai2">
                                    <option disabled selected>Pilih:</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nilai Konversi</label>
                            <div class="input-group">                                    
                                <input type="text" class="form-control" name="nilai2" id="nilai2">
                              </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Penilaian Kuliatas Pekerjaan Yang dilakuakan Secara Tim (K3)</label>
                            <div class="input-group">                                    
                                <input type="text" class="form-control" name="c3" id="c3">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nilai Konversi</label>
                            <div class="input-group">                                    
                                <input type="text" class="form-control" name="nilai3" id="nilai3">
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
                                    <option disabled selected>Pilih:</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nilai Konversi</label>
                            <div class="input-group">                                    
                                <input type="text" class="form-control" name="nilai4" id="nilai4">
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
