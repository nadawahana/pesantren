@extends('masteradmin')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      @if(session('message'))
      <div class="alert alert-info mt-4">
        {{ session('message') }}
      </div>
      @endif
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

  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{ route('post-gelombang1') }}">
          @csrf
          <h4 class="card-title">Gelombang 1</h4>
          <p class="card-description">
          </p>
          <div class="form-group row">
            <form class="forms-sample">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Batas Waktu Pendaftaran</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="exampleInputUsername2" name="batas_waktu_pendaftaran" placeholder="mm/dd/yyyy">
              </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Ujian Lisan</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="exampleInputEmail2" name="ujian_lisan" placeholder="mm/dd/yyyy">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ujian Tulisan</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="exampleInputMobile" name="ujian_tulisan" placeholder="mm/dd/yyyy">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Pengumuman Hasil</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="exampleInputPassword2" name="pengumuman_hasil" placeholder="mm/dd/yyyy">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Daftar Ulang</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="exampleInputConfirmPassword2" name="daftar_ulang" placeholder="mm/dd/yyyy">
            </div>
          </div>
          <div class="form-check form-check-flat form-check-primary">
            
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>

      </div>
    </div>
    </form>




    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form method="POST" action="{{ route('post-gelombang2') }}">
            @csrf
            <h4 class="card-title">Gelombang 2</h4>
            <p class="card-description">

            </p>
            <form class="forms-sample">
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Batas Waktu Pendaftaran</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="exampleInputUsername2" name="batas_waktu_pendaftaran" placeholder="mm  /dd/yyyy">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Ujian Lisan</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="exampleInputEmail2" name="ujian_lisan" placeholder="mm  /dd/yyyy">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ujian Tulisan</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="exampleInputMobile" name="ujian_tulisan" placeholder="mm  /dd/yyyy">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Pengumuman Hasil</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="exampleInputPassword2" name="pengumuman_hasil" placeholder="mm   /dd/yyyy">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Daftar Ulang</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="exampleInputConfirmPassword2" name="daftar_ulang" placeholder="mm  /dd/yyyy">
                </div>
              </div>
              <div class="form-check form-check-flat form-check-primary">
                
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
        </div>
      </div>
      </form>

      @endsection