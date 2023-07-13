@extends('master')
@section('content')
<div>
    <div class="card-body">
        <h3 class="card-title">Pendaftaran</h3>
        <br>
        @if(session('message'))
        <div class="alert alert-info mt-4">
            {{ session('message') }}
        </div>
        @endif
        <div class="template-demo d-flex">
            <a href="/userdatadaftar" class="btn btn-primary btn-custom btn-full-width" style="width: 280px; height: 50px;">
                <div class="d-flex align-items-center">
                    <i class="mdi mdi-account-plus"></i>
                    <span class="ml-2">Data Diri</span>
                </div>
            </a>
            <a href="/data-ortu" class="btn btn-danger btn-custom btn-full-width" style="width: 200px; height: 50px;">
                <div class="d-flex align-items-center">
                    <i class="mdi mdi-file-document-box"></i>
                    <span class="ml-2">Data OrangTua</span>
                </div>
            </a>
            <a href="/persyaratan" class="btn btn-success btn-custom btn-full-width" style="width: 280px; height: 50px;">
                <div class="d-flex align-items-center">
                    <i class="mdi mdi-calendar-check"></i>
                    <span class="ml-2">Persyaratan</span>
                </div>
            </a>
            <a href="/buktitf" class="btn btn-warning btn-custom btn-full-width" style="width: 280px; height: 50px;">
                <div class="d-flex align-items-center">
                    <i class=" mdi mdi-coin"></i>
                    <span class="ml-2">Status Pembayaran</span>
                </div>
            </a>
            <a href="/check-payment-proof" class="btn btn-danger btn-custom btn-full-width" style="width: 200px; height: 50px;">
                <div class="d-flex align-items-center">
                    <i class="mdi mdi-account-card-details"></i>
                    <span class="ml-2">Kartu Ujian</span>
                </div>
            </a>
            <a href="/statusKelulusan" class="btn btn-info btn-custom btn-full-width" style="width: 280px; height: 50px;">
                <div class="d-flex align-items-center">
                    <i class=" mdi mdi-coin"></i>
                    <span class="ml-2">Status kelulusan</span>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection