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
          <h3 class="font-weight-bold">Status</h3>
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

  <div class="col-12 col-xl-8 mb-4">
    <h4 class="font-weight-bold">Mohon maaf anda belum diterima</h4>
    <h4 class="font-weight-bold">Di Pesantren Thawalib Tanjung Limau.</h4>
    <br>
    <h4 class="font-weight-bold">Tetap bersemangat dan jangan bersedih</h4>
  </div>

  @endsection