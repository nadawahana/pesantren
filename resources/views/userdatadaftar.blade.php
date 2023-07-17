@extends('master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            @if (session('message'))
                <div class="alert alert-info mt-4">
                    {{ session('message') }}
                </div>
            @endif
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
        <div class="row">
            <div class="col-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Calon Santri</h4>
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
                        <form method="POST" action="{{ route('data-diri') }}" enctype="multipart/form-data">
                            @csrf
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap"
                                        name="nama_lengkap" value="{{ $datasantri->nama_lengkap ?? old('nama_lengkap') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">NISN</label>
                                    <input type="text" class="form-control" id="nisn" placeholder="NISN"
                                        name="nisn" value="{{ $datasantri->nisn ?? old('nisn') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"
                                        name="tempat_lahir" value="{{ $datasantri->tempat_lahir ?? old('tempat_lahir') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtanggallahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        placeholder="mm/dd/yyyy"
                                        value="{{ $datasantri->tanggal_lahir ?? old('tanggal_lahir') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Jenis Kelamin</label>
                                    <select class="form-control" id="jenkel" name="jenkel">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki-laki"
                                            @if (isset($datasantri)) {{ $datasantri->jenkel == 'laki-laki' ? 'selected' : '' }} @endif>
                                            Laki-laki
                                        </option>
                                        <option value="perempuan"
                                            @if (isset($datasantri)) {{ $datasantri->jenkel == 'perempuan' ? 'selected' : '' }} @endif>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputasalsekolah">Asal Sekolah</label>
                                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                                        value="{{ $datasantri->asal_sekolah ?? old('asal_sekolah') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleJalurMasuk">Jalur Masuk</label>
                                    <select class="form-control" id="jalur_masuk" name="jalur_masuk">
                                        <option value="">Pilih Jalur Masuk</option>
                                        <option value="Asrama"
                                            @if (isset($datasantri)) {{ $datasantri->jalur_masuk == 'Asrama' ? 'selected' : '' }} @endif>
                                            Asrama
                                        </option>
                                        <option value="Non_Asrama"
                                            @if (isset($datasantri)) {{ $datasantri->jalur_masuk == 'Non_Asrama' ? 'selected' : '' }} @endif>
                                            Non Asrama
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNoHp">Nomor HP Orang Tua</label>
                                    <input type="text" class="form-control" id="hp_ayah" name="hp_ayah"
                                        value="{{ $datasantri->hp_ayah ?? old('hp_ayah') }}">
                                </div>
                                <div class="form-group">
                                    <label>Fptp Profil</label>
                                    <input type="file" name="file_name" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image" name="file_name">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">
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
            <div class="col-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Foto Calon Santri</h4>
                        @if ($datasantri->file_name)
                            <img src="{{ asset('storage/files/' . $datasantri->file_name) }}" alt="..."
                                class="img-thumbnail">
                        @else
                            <img src="{{ asset('images/noimage.jpg') }}" class="img-thumbnail">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
