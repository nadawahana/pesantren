@extends('masteradmin')
@section('content')
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Data Orang Tua Calon Santri</h3>
                  </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
 <!-- partial -->

 <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                  <h4 class="card-title">Data Orang Tua</h4>
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable">
    <thead>
        <tr>
                                <th>No</th>
                                <th>Nama Ayah Kandung</th>
                                <th>Tempat Lahir Ayah</th>
                                <th>Tanggal Lahir Ayah</th>
                                <th>Keterangan Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Penghasilan Ayah</th>
                                <th>Nama Ibu Kandung</th>
                                <th>Tempat Lahir Ibu</th>
                                <th>Tanggal Lahir Ibu</th>
                                <th>Keterangan Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Penghasilan Ibu</th>
                            </tr>
                        </thead>  
                        <tbody>
                          @foreach($data as $d)
                            <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$d -> nama_ayah}}</td>
                              <td>{{$d -> tempat_lahir_ayah}}</td>
                              <td>{{$d -> tanggal_lahir_ayah}}</td>
                              <td>{{$d -> ket_ayah}}</td>
                              <td>{{$d -> pekerjaan_ayah}}</td>
                              <td>{{$d -> penghasilan_ayah}}</td>
                              <td>{{$d -> nama_ibu}}</td>
                              <td>{{$d -> tempat_lahir_ibu}}</td>
                              <td>{{$d -> tanggal_lahir_ibu}}</td>
                              <td>{{$d -> ket_ibu}}</td>
                              <td>{{$d -> pekerjaan_ibu}}</td>
                              <td>{{$d -> penghasilan_ibu}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

 @endsection

<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>