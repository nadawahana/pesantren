@extends('master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Data Orang Tua Calon Santri</h3>
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
                    <h4 class="card-title">Data Orang Tua Calon Santri</h4>
                    @if (isset($message))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('post-ortu') }}">
                        @csrf
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Ayah Kandung</label>
                                <input type="text" class="form-control" id="nama_ayah" placeholder="Nama Lengkap"
                                    name="nama_ayah" value="{{ $dataortu->nama_ayah ?? old('nama_lengkap') }}"
                                    @if ($status) disabled @endif>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tempat Lahir Ayah</label>
                                <input type="text" class="form-control" id="tempat_lahir_ayah"
                                    placeholder="Tempat Lahir Ayah" name="tempat_lahir_ayah"
                                    value="{{ $dataortu->tempat_lahir_ayah ?? old('tempat_lahir_ayah') }}"
                                    @if ($status) disabled @endif>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtanggallahir">Tanggal Lahir Ayah</label>
                                <input type="date" class="form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah"
                                    placeholder="mm/dd/yyyy"
                                    value="{{ $dataortu->tanggal_lahir_ayah ?? old('tanggal_lahir_ayah') }}"
                                    @if ($status) disabled @endif>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Keterangan Ayah</label>
                                <select class="form-control" id="ket_ayah" name="ket_ayah"
                                    @if ($status) disabled @endif>
                                    <option value="masih_hidup"
                                        @if (isset($dataortu)) {{ $dataortu->ket_ayah == 'masih_hidup' ? 'selected' : '' }} @endif>
                                        Masih Hidup</option>
                                    <option value="sudah_wafat"
                                        @if (isset($dataortu)) {{ $dataortu->ket_ayah == 'sudah_wafat' ? 'selected' : '' }} @endif>
                                        Sudah Wafat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleJalurMasuk">Pekerjaan Ayah</label>
                                <input class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"
                                    value="{{ $dataortu->pekerjaan_ayah ?? old('pekerjaan_ayah') }}"
                                    @if ($status) disabled @endif></input>
                            </div>
                            <div class="form-group">
                                <label for="exampleJalurMasuk">Penghasilan Ayah</label>
                                <select class="form-control" id="penghasilan_ayah" name="penghasilan_ayah"
                                    @if ($status) disabled @endif>
                                    <option value="<1jt-3jt"
                                        @if (isset($dataortu)) {{ $dataortu->penghasilan_ayah == '<1jt-3jt' ? 'selected' : '' }} @endif>
                                        1jt-3jt</option>
                                    <option value="3jt-5jt"
                                        @if (isset($dataortu)) {{ $dataortu->penghasilan_ayah == '3jt-5jt' ? 'selected' : '' }} @endif>
                                        3jt-5jt</option>
                                    <option value="5jt-10jt"
                                        @if (isset($dataortu)) {{ $dataortu->penghasilan_ayah == '5jt-10jt' ? 'selected' : '' }} @endif>
                                        5jt-10jt</option>
                                    <option value="10jt+"
                                        @if (isset($dataortu)) {{ $dataortu->penghasilan_ayah == '10jt+' ? 'selected' : '' }} @endif>
                                        10jt+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Ibu Kandung</label>
                                <input type="text" class="form-control" id="nama_ibu" placeholder="Nama Lengkap"
                                    name="nama_ibu" value="{{ $dataortu->nama_ibu ?? old('nama_ibu') }}"
                                    @if ($status) disabled @endif>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tempat Lahir Ibu</label>
                                <input type="text" class="form-control" id="tempat_lahir_ibu"
                                    placeholder="Tempat Lahir bu" name="tempat_lahir_ibu"
                                    value="{{ $dataortu->tempat_lahir_ibu ?? old('tempat_lahir_ibu') }}"
                                    @if ($status) disabled @endif>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtanggallahir">Tanggal Lahir Ibu</label>
                                <input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu"
                                    placeholder="mm/dd/yyyy"
                                    value="{{ $dataortu->tanggal_lahir_ibu ?? old('tanggal_lahir_ibu') }}"
                                    @if ($status) disabled @endif>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Keterangan Ibu</label>
                                <select class="form-control" id="ket_ibu" name="ket_ibu"
                                    @if ($status) disabled @endif>
                                    <option value="masih_hidup"
                                        @if (isset($dataortu)) {{ $dataortu->ket_ibu == 'masih_hidup' ? 'selected' : '' }} @endif>
                                        Masih Hidup</option>
                                    <option value="sudah_wafat"
                                        @if (isset($dataortu)) {{ $dataortu->ket_ibu == 'sudah_wafat' ? 'selected' : '' }} @endif>
                                        Sudah Wafat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleJalurMasuk">Pekerjaan Ibu</label>
                                <input class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu"
                                    value="{{ $dataortu->pekerjaan_ibu ?? old('pekerjaan_ibu') }}"
                                    @if ($status) disabled @endif></input>
                            </div>
                            <div class="form-group">
                                <label for="exampleJalurMasuk">Penghasilan Ibu</label>
                                <select class="form-control" id="penghasilan_ibu" name="penghasilan_ibu"
                                    @if ($status) disabled @endif>
                                    <option value="<1jt-3jt"
                                        @if (isset($dataortu)) {{ $dataortu->penghasilan_ibu == '<1jt-3jt' ? 'selected' : '' }} @endif>
                                        1jt-3jt</option>
                                    <option value="3jt-5jt"
                                        @if (isset($dataortu)) {{ $dataortu->penghasilan_ibu == '3jt-5jt' ? 'selected' : '' }} @endif>
                                        3jt-5jt</option>
                                    <option value="5jt-10jt"
                                        @if (isset($dataortu)) {{ $dataortu->penghasilan_ibu == '5jt-10jt' ? 'selected' : '' }} @endif>
                                        5jt-10jt</option>
                                    <option value="10jt+"
                                        @if (isset($dataortu)) {{ $dataortu->penghasilan_ibu == '10jt+' ? 'selected' : '' }} @endif>
                                        10jt+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Alamat Jalan</label>
                                <input type="text" class="form-control" id="alamat" placeholder="ALAMAT"
                                    name="alamat" value="{{ $dataortu->alamat ?? old('alamat') }}"
                                    @if ($status) disabled @endif>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2"
                                @if ($status) disabled @endif>
                                @if (isset($datasantri))
                                    Ubah Data
                                @else
                                    Tambah Data
                                @endif
                            </button>

                        </form>

                    </form>
                </div>
            </div>
        </div>
    @endsection
