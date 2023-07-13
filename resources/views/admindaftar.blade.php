  @extends('masteradmin')
@section('content')
<div class="content-wrapper">
@if(session('message'))
  <div class="alert alert-info mt-4">
    {{ session('message') }}
  </div>
  @endif
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Informasi Pendaftaran</h3>
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
                  <h4 class="card-title">Data Calon Santri</h4>
                  <div class="table-responsive pt-3">
                  
    <table class="table table-bordered" id="dataTable">
    <thead>
        <tr>
                                <th>No</th>
                                <th>Nama Santri</th>
                                <th>NISN</th>
                                <th>Asal Sekolah</th>
                                <th>tempat lahir</th>
                                <th>tanggal lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>jalur masuk</th>
                                <th>no handphone ayah</th>
                                <th>file</th>
                            </tr>
                        </thead>  
                        <tbody>
                        @foreach($data as $index => $row)
                            <tr>
                              <td>{{ $index + 1 }}</td>
                              <td>{{ $row->nama_lengkap }}</td>
                              <td>{{ $row->nisn }}</td>
                              <td>{{ $row->asal_sekolah }}</td>
                              <td>{{ $row->tempat_lahir }}</td>
                              <td>{{ $row->tanggal_lahir }}</td>
                              <td>{{ $row->jenkel }}</td>
                              <td>{{ $row->jalur_masuk }}</td>
                              <td>{{ $row->hp_ayah }}</td>
                              <td>{{ $row->file_name }}</td>
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