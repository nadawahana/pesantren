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
                        {{-- <h3 class="font-weight-bold">Informasi Pendaftaran</h3> --}}
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
        <div class="col-md-12 grid-margin stretch-card">
            <script>
                fetch('http://127.0.0.1:8000/api/data-gelombang1')
                    .then(response => response.json())
                    .then(data => {
                        const jsonData = JSON.stringify(data);

                        const bts_wkt = data.data.batas_waktu_pendaftaran;
                        const u_l = data.data.ujian_lisan;
                        const u_t = data.data.ujian_tulisan;
                        const p_h = data.data.pengumuman_hasil;
                        const d_u = data.data.daftar_ulang;


                        document.getElementById('bts_wkt').value = bts_wkt;
                        document.getElementById('u_l').value = u_l;
                        document.getElementById('u_t').value = u_t;
                        document.getElementById('p_h').value = p_h;
                        document.getElementById('d_u').value = d_u;

                    })
                    .catch(error => console.error(error));
            </script>
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
                                <input type="text" class="form-control" id="u_l">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ujian Tulisan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="u_t">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Pengumuman Hasil</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="p_h">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Daftar Ulang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="d_u">
                            </div>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">

                        </div>
                        <!-- <button type="submit" class="btn btn-primary mr-2" onclick="myFunction()">Submit</button>
              <button class="btn btn-light">Cancel</button> -->
                    </form>
                </div>
            </div>
            <script>
                function myFunction() {
                    alert("Data Anda Berhasil Ditambahkan");
                }
            </script>
        @endsection
