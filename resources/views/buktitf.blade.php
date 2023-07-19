@extends('master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-xl-0">
                        <h3 class="font-weight-bold">Bukti Pembayaran Pendaftaran</h3>
                    </div>
                </div>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-8 stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if (isset($databukti) == false)
                            <center>
                                <img src="{{ asset('images/noimage.jpg') }}" class="img-thumbnail" style="max-width: 50%">
                            </center>
                            <form method="POST" class="mt-3" action="{{ route('bukti-bayar') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Unggah Bukti Bayar</label>
                                    <input type="file" name="bukti_tf" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Choose File">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload
                                                Bukti </button>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        @else
                            @if ($databukti->status == 1)
                                <button type="button" class="btn btn-success btn-lg btn-block mb-3 ">Bukti Transfer Telah
                                    Diterima
                                    <u>
                                        <a href="" class="d-block mt-3 text-light font-weight-light"> Cetak
                                            Kartu Ujian</a>
                                    </u></button>
                            @elseif($databukti->status == 2)
                                <button type="button" class="btn btn-success btn-danger btn-block mb-3">Bukti Anda Ditolak
                                    Silahkan Upload Ulang
                                    Telah
                                    Diterima</button>
                            @elseif($databukti->status == 0)
                                <button type="button" class="btn btn-success btn-warning btn-block mb-3">Menunggu
                                    Konfirmasi</button>
                            @endif
                            <center>
                                @if ($databukti->bukti_tf)
                                    <a href="{{ asset('storage/Pembayaran/' . $databukti->bukti_tf) }}" target="_blank">
                                        <img src="{{ asset('storage/Pembayaran/' . $databukti->bukti_tf) }}"
                                            alt="Bukti Pembayaran" class="img-thumbnail">
                                    </a>
                                @else
                                    <img src="{{ asset('images/noimage.jpg') }}" class="img-thumbnail"
                                        style="max-width: 50%">
                                @endif`
                            </center>
                            @if ($databukti->status != 1)
                                <form method="POST" class="mt-3" action="{{ route('bukti-bayar') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Unggah Bukti Bayar</label>
                                        <input type="file" name="bukti_tf" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Choose File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload
                                                    Bukti </button>
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">
                                        @if ($databukti->status == 0)
                                            Upload
                                        @elseif($databukti->status == 2)
                                            Upload Ulang
                                        @endif
                                    </button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
