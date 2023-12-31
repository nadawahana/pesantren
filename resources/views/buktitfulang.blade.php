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
          <h3 class="font-weight-bold">Bukti Pembayaran Daftar Ulang</h3>
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
  <form method="POST" action="{{ route('post.tfUlang')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Unggah Bukti Bayar</label>
      <input type="file" name="buktiTf" class="file-upload-default">
      <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
        </span>
      </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
  </form>
</div>
</div>
</div>

@endsection