@extends('masteradmin')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                @if (session('message'))
                    <div class="alert alert-info mt-4">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Informasi Pendaftaran</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->
        <div class="row">
            <div class="col-md-6 stretch-card">
                {{-- Gelombang 1 --}}
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('post-gelombang1') }}">
                            @csrf
                            <h4 class="card-title">Gelombang 1</h4>
                            <p class="card-description">
                            </p>
                            <div class="form-group row">
                                <form class="forms-sample">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Batas Waktu
                                        Pendaftaran</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="exampleInputUsername2"
                                            name="batas_waktu_pendaftaran" placeholder="mm/dd/yyyy"
                                            value="{{ isset($gelombang1->batas_waktu_pendaftaran) ? $gelombang1->batas_waktu_pendaftaran->format('Y-m-d') : old('batas_waktu_pendaftaran') }}"
                                            min="{{ now()->format('Y-m-d') }}">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Ujian Lisan</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="exampleInputEmail2" name="ujian_lisan"
                                        placeholder="mm/dd/yyyy"
                                        value="{{ isset($gelombang1->ujian_lisan) ? $gelombang1->ujian_lisan->format('Y-m-d') : old('ujian_lisan') }}"
                                        min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ujian Tulisan</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="exampleInputMobile" name="ujian_tulisan"
                                        placeholder="mm/dd/yyyy"
                                        value="{{ isset($gelombang1->ujian_tulisan) ? $gelombang1->ujian_tulisan->format('Y-m-d') : old('ujian_tulisan') }}"
                                        min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Pengumuman
                                    Hasil</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="exampleInputPassword2"
                                        name="pengumuman_hasil" placeholder="mm/dd/yyyy"
                                        value="{{ isset($gelombang1->pengumuman_hasil) ? $gelombang1->pengumuman_hasil->format('Y-m-d') : old('pengumuman_hasil') }}"
                                        min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Daftar
                                    Ulang</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="exampleInputConfirmPassword2"
                                        name="daftar_ulang" placeholder="mm/dd/yyyy"
                                        value="{{ isset($gelombang1->daftar_ulang) ? $gelombang1->daftar_ulang->format('Y-m-d') : old('daftar_ulang') }}"
                                        min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">
                                @if ($gelombang1)
                                    Ubah
                                @else
                                    Tambah
                                @endif
                            </button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 stretch-card">

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('post-gelombang2') }}">
                            @csrf
                            <h4 class="card-title">Gelombang 2</h4>
                            <p class="card-description">
                            </p>
                            <div class="form-group row">
                                <form class="forms-sample">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Batas Waktu
                                        Pendaftaran</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="exampleInputUsername2"
                                            name="batas_waktu_pendaftaran" placeholder="mm/dd/yyyy"
                                            value="{{ isset($gelombang2->batas_waktu_pendaftaran) ? $gelombang2->batas_waktu_pendaftaran->format('Y-m-d') : old('batas_waktu_pendaftaran') }}"
                                            min="{{ now()->format('Y-m-d') }}">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Ujian Lisan</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="exampleInputEmail2" name="ujian_lisan"
                                        placeholder="mm/dd/yyyy"
                                        value="{{ isset($gelombang2->ujian_lisan) ? $gelombang2->ujian_lisan->format('Y-m-d') : old('ujian_lisan') }}"
                                        min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ujian Tulisan</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="exampleInputMobile"
                                        name="ujian_tulisan" placeholder="mm/dd/yyyy"
                                        value="{{ isset($gelombang2->ujian_tulisan) ? $gelombang2->ujian_tulisan->format('Y-m-d') : old('ujian_tulisan') }}"
                                        min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Pengumuman
                                    Hasil</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="exampleInputPassword2"
                                        name="pengumuman_hasil" placeholder="mm/dd/yyyy"
                                        value="{{ isset($gelombang2->pengumuman_hasil) ? $gelombang2->pengumuman_hasil->format('Y-m-d') : old('pengumuman_hasil') }}"
                                        min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Daftar
                                    Ulang</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="exampleInputConfirmPassword2"
                                        name="daftar_ulang" placeholder="mm/dd/yyyy"
                                        value="{{ isset($gelombang2->daftar_ulang) ? $gelombang2->daftar_ulang->format('Y-m-d') : old('daftar_ulang') }}"
                                        min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">
                                @if ($gelombang2)
                                    Ubah
                                @else
                                    Tambah
                                @endif
                            </button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
