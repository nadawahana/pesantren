@extends('master')
@section('content')
    <div>
        <div class="card-body">
            <h3 class="card-title">Pendaftaran</h3>
            @if (session('message'))
                <div class="alert alert-info mt-1">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2 bg-primary text-light">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                        Data Diri</div>
                                    <a href="{{ route('userdatadaftar') }}" class="text-light"><small>Lihat Data
                                            -></small></a>
                                </div>
                                <div class="col-auto">
                                    <i class="mdi mdi-account-plus fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2 bg-danger text-light">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                        Data Orang Tua</div>
                                    <a href="{{ route('data-ortu') }}" class="text-light"><small>Lihat Data
                                            -></small></a>
                                </div>
                                <div class="col-auto">
                                    <i class="mdi mdi-file-document-box fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2 bg-success text-light">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                        Persyaratan</div>
                                    <a href="{{ route('persyaratan') }}" class="text-light"><small>Lihat Data
                                            -></small></a>
                                </div>
                                <div class="col-auto">
                                    <i class="mdi mdi-calendar-check fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2 bg-warning text-light">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                        Status Pembayaran</div>
                                    <a href="{{ route('buktitf') }}" class="text-light"><small>Lihat Data
                                            -></small></a>
                                </div>
                                <div class="col-auto">
                                    <i class="mdi mdi mdi-coin fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2 bg-secondary text-light">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                        Kartu Ujian</div>
                                    <a href="{{ route('check-payment-proof') }}" class="text-light"><small>Lihat Data
                                            -></small></a>
                                </div>
                                <div class="col-auto">
                                    <i class="mdi mdi-account-card-details fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2 bg-info text-light">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                        Status kelulusan</div>
                                    <a href="{{ route('statusKelulusan') }}" class="text-light"><small>Lihat Data
                                            -></small></a>
                                </div>
                                <div class="col-auto">
                                    <i class="mdi mdi mdi-bookmark-check fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
