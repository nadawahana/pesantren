@extends('master')
@section('content')
    <div class="content-wrapper">
        @if (session('message'))
            <div class="alert alert-info mt-4">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Informasi Pendaftaran</h3>
                        <h6 class="font-weight-normal mb-0">Silahkan <a href="/inputdaftar"><span class="text-primary"
                                    type="submit">Klik disini!</span></a> untuk pembayaran pendaftaran</h6>
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
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gelombang 1</h4>
                        <p class="card-description">

                        </p>
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Batas Waktu
                                    Pendaftaran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="bts_wkt" readonly
                                        value="{{ $gelombang1->batas_waktu_pendaftaran }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Ujian Lisan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="u_l" readonly
                                        value="{{ $gelombang1->ujian_lisan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ujian Tulisan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="u_t" readonly
                                        value="{{ $gelombang1->ujian_tulisan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Pengumuman Hasil</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="p_h" readonly
                                        value="{{ $gelombang1->pengumuman_hasil }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Daftar
                                    Ulang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="d_u" readonly
                                        value="{{ $gelombang1->daftar_ulang }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gelombang 2</h4>
                        <p class="card-description">

                        </p>
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Batas Waktu
                                    Pendaftaran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="bts_wkt" readonly
                                        value="{{ $gelombang2->batas_waktu_pendaftaran }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Ujian Lisan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="u_l" readonly
                                        value="{{ $gelombang2->ujian_lisan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ujian Tulisan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="u_t" readonly
                                        value="{{ $gelombang2->ujian_tulisan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Pengumuman Hasil</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="p_h" readonly
                                        value="{{ $gelombang2->pengumuman_hasil }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Daftar
                                    Ulang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="d_u" readonly
                                        value="{{ $gelombang2->daftar_ulang }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
