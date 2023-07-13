@extends('master')
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
                  <h3 class="font-weight-bold">Data Calon Santri</h3>
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

 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Nomor Ujian</h4>
                  <form method="POST" action="{{ route('post-nomor') }}">
                    @csrf
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap" name="nama_lengkap">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">NISN</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="NISN" name="nisn">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Tempat Lahir</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Tempat Lahir" name="tempat_lahir">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputtanggallahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleInputtanggallahir" name="tanggal_lahir" placeholder="mm/dd/yyyy">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Jenis Kelamin</label>
                          <select class="form-control" id="exampleSelectGender" name="jenkel">
                            <option value="laki-laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputasalsekolah">Asal Sekolah</label>
                        <input type="text" class="form-control" id="exampleInputasalsekolah" name="asal_sekolah">
                      </div>
                      <div class="form-group">
                        <label for="exampleJalurMasuk">Jalur Masuk</label>
                          <select class="form-control" id="exampleJalurMasuk" name="jalur_masuk">
                            <option value="neraka">Neraka</option>
                            <option value="surga">Surga</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </form>
                </div>
              </div>
            </div>
            @endsection