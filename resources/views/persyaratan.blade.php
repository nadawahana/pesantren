@extends('master')
@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Data Persyaratan Calon Santri</h3>
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
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Persyaratan Calon Santri</h4>
                        <h4 class="card-description">Dokumen Persyaratan</h4>
                        <hr />
                        @if (session('message'))
                            <div class="alert alert-info mt-4">
                                {{ session('message') }}
                            </div>
                        @endif
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
                        <form method="POST" action="{{ route('post-persyaratan') }}" enctype="multipart/form-data">
                            @csrf
                            {{-- DOKUMEN --}}
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>IJAZAH *</label>
                                        <input type="file" name="ijazah" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button"
                                                    @if ($status) disabled @endif>Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                        @if (isset($datapersyaratan->ijazah))
                                            <p class="text-info mt-2"><a
                                                    href="{{ asset('storage/persyaratan/' . ($datapersyaratan->ijazah ?? null)) }}"
                                                    target="_blank">Lihat
                                                    File</a></p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Kartu Keluarga *</label>
                                        <input type="file" name="KK" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button"
                                                    @if ($status) disabled @endif>Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                        @if (isset($datapersyaratan->KK))
                                            <p class="text-info mt-2"><a
                                                    href="{{ asset('storage/persyaratan/' . ($datapersyaratan->KK ?? null)) }}"
                                                    target="_blank">Lihat
                                                    File</a></p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>AKTA KELAHIRAN *</label>
                                        <input type="file" name="akta_kelahiran" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button"
                                                    @if ($status) disabled @endif>Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                        @if (isset($datapersyaratan->akta_kelahiran))
                                            <p class="text-info mt-2"><a
                                                    href="{{ asset('storage/persyaratan/' . ($datapersyaratan->akta_kelahiran ?? null)) }}"
                                                    target="_blank">Lihat
                                                    File</a></p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>PAS FOTO *</label>
                                        <input type="file" name="pas_foto" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button"
                                                    @if ($status) disabled @endif>Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                        @if (isset($datapersyaratan->pas_foto))
                                            <p class="text-info mt-2"><a
                                                    href="{{ asset('storage/persyaratan/' . ($datapersyaratan->pas_foto ?? null)) }}"
                                                    target="_blank">Lihat
                                                    File</a></p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Kartu Indonesia Pintar (KIP)</label>
                                        <input type="file" name="KIP" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button"
                                                    @if ($status) disabled @endif>Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                        <small class="text-muted">Silahkan masukan KIP, Kosongkan jika tidak ada!</small>
                                        @if (isset($datapersyaratan->KIP))
                                            <p class="text-info mt-2"><a
                                                    href="{{ asset('storage/persyaratan//' . ($datapersyaratan->KIP ?? null)) }}"
                                                    target="_blank">Lihat
                                                    File</a></p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Prestasi</label>
                                        <select class="form-control" name="tingkat">
                                            <option>Tingkat</option>
                                            <option value="provinsi"
                                                @if (isset($datapersyaratan->tingkat) == true) {{ $datapersyaratan->tingkat == 'provinsi' ? 'selected' : '' }} @endif>
                                                Provinsi
                                            </option>
                                            <option value="kota"
                                                @if (isset($datapersyaratan->tingkat) == true) {{ $datapersyaratan->tingkat == 'kota' ? 'selected' : '' }} @endif>
                                                Kota</option>
                                            <option value="kecamatan"
                                                @if (isset($datapersyaratan->tingkat) == true) {{ $datapersyaratan->tingkat == 'kecamatan' ? 'selected' : '' }} @endif>
                                                Kecamatan</option>
                                            <option value="rt/rw"
                                                @if (isset($datapersyaratan->tingkat) == true) {{ $datapersyaratan->tingkat == '"rt/rw' ? 'selected' : '' }} @endif>
                                                RT/RW</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Pengharagaan</label>
                                        <input type="file" name="penghargaan" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button"
                                                    @if ($status) disabled @endif>Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                        @if (isset($datapersyaratan->penghargaan))
                                            <p class="text-info mt-2"><a
                                                    href="{{ asset('storage/persyaratan/' . ($datapersyaratan->penghargaan ?? null)) }}"
                                                    target="_blank">Lihat
                                                    File</a></p>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2"
                                        @if ($status) disabled @endif>
                                        @if (isset($datasantri))
                                            Tambah Data
                                        @else
                                            Ubah Data
                                        @endif
                                    </button>
                                </div>
                            </div>
                    </div>
                    {{-- END DOKUMEN --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function showWarning() {
            document.getElementById('warning').style.display = 'block';
        }

        function hideWarning() {
            document.getElementById('warning').style.display = 'none';
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#showFormBtn").click(function() {
                $("#addDataForm").toggle();
            });
        });
    </script>
@endpush
