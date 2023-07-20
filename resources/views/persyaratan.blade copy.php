@extends('master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Persyaratan</h3>
                </div>
                <div class="col-12 col-xl-4 d-flex justify-content-end">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <!-- Empty -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('message'))
    <div class="alert alert-info mt-4">
        {{ session('message') }}
    </div>
    @endif
    <!-- partial -->
    <form method="POST" action="{{ route('post-persyaratan')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>IJAZAH</label>
            <input type="file" name="ijazah" class="file-upload-default" require>
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label>Kartu Keluarga</label>
            <input type="file" name="KK" class="file-upload-default" require>
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label>AKTA KELAHIRAN</label>
            <input type="file" name="akta_kelahiran" class="file-upload-default" require>
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label>Nilai Semester 1 Kelas 5</label>
            <input type="file" name="smt1-kelas5" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label>Nilai Semester 2 Kelas 5</label>
            <input type="file" name="smt2-kelas5" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label>Nilai Semester 1 Kelas 6</label>
            <input type="file" name="smt1_kls6" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label>PAS FOTO</label>
            <input type="file" name="pas_foto" class="file-upload-default" require>
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>

        <div class="col-12 col-xl-8 mb-4">
            <h5 class="font-weight-bold">Silahkan masukan KIP, Kosongkan jika tidak ada!</h5>
        </div>

        <div class="form-group">
            <label>KIP</label>
            <input type="file" name="KIP" class="file-upload-default" require>
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>

        <div class="col-12 col-xl-8 mb-4">
            <h5 class="font-weight-bold">Silahkan masukan piagam penghargaan, Kosongkan jika tidak ada!</h5>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tingkat</label>
            <div class="col-sm-4">
                <select class="form-control" name="tingkat">
                    <option value="provinsi">Provinsi</option>
                    <option value="kota">Kota</option>
                    <option value="kecamatan">Kecamatan</option>
                    <option value="rt/rw">RT/RW</option>
                </select>
            </div>
            <div class="input-group col-xs-12">
                <input type="file" name="penghargaan" class="file-upload-default" require>
                <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File" require>
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                </span>
            </div>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="card-title">Nilai Semseter 1 & 2 kelas 5 dan semester 1 kelas 6</h4>
                    </center>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 Agama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_agama" id="1kls5_agama">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 2 Kls 5 Agama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="2kls5_agama" id="2kls5_agama">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_pkn" id="1kls5_pkn">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 2 Kls 5 PKN</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="2kls5_pkn" id="2kls5_pkn">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 Bahasa Indonesia</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_bIndo" id="1kls5_bIndo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 2 Kls 5 Bahasa indonesia</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="2kls5_bIndo" id="2kls5_bIndo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 Matematika</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_mtk" id="1kls5_mtk">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 2 Kls 5 Matematika</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="2kls5_mtk" id="2kls5_mtk">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 IPA</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_ipa" id="1kls5_ipa">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 2 Kls 5 IPA</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_ipa" id="1kls6_ipa">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 IPS</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_ips" id="1kls5_ips">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 IPS</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="2kls5_ips" id="2kls5_ips">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 Seni Budaya</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_senbud" id="1kls5_senbud">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 2 Kls 5 Seni Budaya</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="2kls5_senbud" id="2kls5_senbud">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 Pendidikan Jasmani</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_penjas" id="1kls5_penjas">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 2 Kls 5 Pendidikan Jasmani</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="2kls5_penjas" id="2kls5_penjas">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 5 Rata-Rata</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls5_rata2" id="1kls5_rata2">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 2 Kls 5 Rata-Rata</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="2kls5_rata2" id="2kls5_rata2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 Agama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_agama" id="1kls6_agama">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 PKN</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_pkn" id="1kls6_pkn">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 Bahasa Indonesia</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_bIndo" id="1kls6_bIndo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 Matematika</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_mtk" id="1kls6_mtk">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 IPA</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_ipa" id="1kls6_ipa">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 IPS</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_ips" id="1kls6_ips">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 Seni Budaya</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_senbud" id="1kls6_senbud">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 Pendidikan Jasmani</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" required oninvalid="showWarning()" oninput="hideWarning()" name="1kls6_penjas" id="1kls6_penjas">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="warning" class="alert alert-warning" style="display: none;">Hanya Masukkan Angka.</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smt 1 Kls 6 rata-Rata</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" pattern="[0-9]+" name="1kls6_rata2" id="1kls6_rata2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                </div>
    </form>
</div>
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
@endsection