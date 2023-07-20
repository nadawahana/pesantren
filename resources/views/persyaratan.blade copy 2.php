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
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>IJAZAH *</label>
                                        <input type="file" name="ijazah" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Kartu Keluarga *</label>
                                        <input type="file" name="KK" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>AKTA KELAHIRAN *</label>
                                        <input type="file" name="akta_kelahiran" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>PAS FOTO *</label>
                                        <input type="file" name="pas_foto" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Kartu Indonesia Pintar (KIP)</label>
                                        <input type="file" name="KIP" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                        <small class="text-muted">Silahkan masukan KIP, Kosongkan jika tidak ada!</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nilai Semester 1 Kelas 5 *</label>
                                        <input type="file" name="smt1_kelas5" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Semester 2 Kelas 5 *</label>
                                        <input type="file" name="smt2_kelas5" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Semester 1 Kelas 6 *</label>
                                        <input type="file" name="smt1_kelas6" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Prestasi</label>
                                        <select class="form-control" name="tingkat">
                                            <option>Tingkat</option>
                                            <option value="provinsi">Provinsi</option>
                                            <option value="kota">Kota</option>
                                            <option value="kecamatan">Kecamatan</option>
                                            <option value="rt/rw">RT/RW</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Pengharagaan</label>
                                        <input type="file" name="penghargaan" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Pilih File">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Pilih
                                                    File</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- END DOKUMEN --}}



                            <h4 class="card-description">Nilai Rapot</h4>
                            <hr />
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-description font-weight-bold">Nilai Rapot Semester 1 Kelas 5</h4>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 Agama</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_agama" id="1kls5_agama" value="{{ old('1kls5_agama') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 PKN</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_pkn" id="1kls5_pkn" value="{{ old('1kls5_pkn') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 B. Indonesia</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_bIndo" id="1kls5_bIndo" value="{{ old('1kls5_bIndo') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 Matematika</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_mtk" id="1kls5_mtk" value="{{ old('1kls5_mtk') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 IPA</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_ipa" id="1kls5_ipa" value="{{ old('1kls5_ipa') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 IPS</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_ips" id="1kls5_ips" value="{{ old('1kls5_ips') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 Penjas</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_penjas" id="1kls5_penjas" value="{{ old('1kls5_penjas') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 Seni Budaya</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_senbud" id="1kls5_senbud" value="{{ old('1kls5_senbud') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 5 Rata-Rata</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls5_rata2" id="1kls5_rata2" value="{{ old('1kls5_rata2') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4 class="card-description font-weight-bold">Nilai Rapot Semester 2 Kelas 5</h4>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 Agama</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_agama" id="2kls5_agama" value="{{ old('2kls5_agama') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 PKN</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_pkn" id="2kls5_pkn" value="{{ old('2kls5_pkn') }}">>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 B. Indonesia</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_bIndo" id="2kls5_bIndo" value="{{ old('2kls5_bIndo') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 Matematika</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_mtk" id="2kls5_mtk" value="{{ old('2kls5_mtk') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 IPA</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_ipa" id="2kls5_ipa" value="{{ old('2kls5_ipa') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 IPS</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_ips" id="2kls5_ips" value="{{ old('2kls5_ips') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 Penjas</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_penjas" id="2kls5_penjas" value="{{ old('2kls5_penjas') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 Seni Budaya</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_senbud" id="2kls5_senbud" value="{{ old('2kls5_senbud') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 2 Kelas 5 Rata-Rata</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="2kls5_rata2" id="2kls5_rata2" value="{{ old('2kls5_rata2') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4 class="card-description font-weight-bold">Nilai Rapot Semester 1 Kelas 5</h4>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 Agama</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_agama" id="1kls6_agama" value="{{ old('1kls6_agama') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 PKN</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_pkn" id="1kls6_pkn" value="{{ old('1kls6_pkn') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 B. Indonesia</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_bIndo" id="1kls6_bIndo" value="{{ old('1kls6_bIndo') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 Matematika</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_mtk" id="1kls6_mtk" value="{{ old('1kls6_mtk') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 IPA</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_ipa" id="1kls6_ipa" value="{{ old('1kls6_ipa') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 IPS</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_ips" id="1kls6_ips" value="{{ old('1kls6_ips') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 Penjas</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_penjas" id="1kls6_penjas" value="{{ old('1kls6_penjas') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 Seni Budaya</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_senbud" id="1kls6_senbud" value="{{ old('1kls6_senbud') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester 1 Kelas 6 Rata-Rata</label>
                                        <div>
                                            <input type="text" class="form-control" pattern="[0-9]+"
                                                oninvalid="showWarning()" oninput="hideWarning()" placeholder="0"
                                                name="1kls6_rata2" id="1kls6_rata2" value="{{ old('1kls6_rata2') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        </form>
                    </div>
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
