@extends('master')
@section('content')
    <div class="content-wrapper">
        {{-- <div class="row">
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
        </div> --}}
        <!-- partial -->

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card tale-bg">
                <div class="card-people mt-auto p-5">
                    <h2 class="location font-weight-normal text-center">Hasil Pengumuman</h2>
                    <h4 class="location font-weight-normal text-center">Seleksi Penerimaan Santri Pesantren Thawalib Tanjung
                        Limau</h4>
                    <div class="w-50 pt-3 m-auto ">
                        <table class="table table-border">
                            <tr>
                                <td>NAMA</td>
                                <td class="font-weight-bold">{{ Str::upper($datasantri->nama_lengkap) }}</td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <td class="font-weight-bold">{{ Str::upper($datasantri->nisn) }}</td>
                            </tr>
                            <tr>
                                <td>TEMPAT, TANGGAL LAHIR</td>
                                <td class="font-weight-bold">
                                    {{ Str::upper($datasantri->tempat_lahir) . ', ' . $datasantri->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td>ASAL SEKOLAH</td>
                                <td class="font-weight-bold">{{ Str::upper($datasantri->asal_sekolah) }}</td>
                            </tr>
                            <tr>
                                <td>JALUR MASUK</td>
                                <td class="font-weight-bold">
                                    {{ $datasantri->jalur_masuk == 'Non_Asrama' ? 'NON ASRAMA' : Str::upper($datasantri->jalur_masuk) }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    {{-- @if ($datasantri->user->dataDaftarUlang->status == 0) --}}
                    <div class="w-50 pt-3 m-auto ">

                        @if ($datasantri->user->status_kelulusan == 1)
                            <h6 class="font-weight-bold text-center mb-3">DENGAN INI MENYATAKAN BAHWA ANDA
                            </h6>
                            @if ($datasantri->user->dataDaftarUlang()->count() == 0)
                                <button type="button"
                                    class="btn btn-success btn-block btn-rounded btn-fw text-center mb-3">Lulus</button>
                                <p class="text-center"> Segera Lakukan Pendaftaran Ulang Melalu Link Berikut : <a
                                        href="/buktitfulang">Daftar Ulang</a></p>
                            @else
                                @if ($datasantri->user->dataDaftarUlang->status == 0)
                                    <button type="button"
                                        class="btn btn-warning btn-block btn-rounded btn-fw text-center mb-3">Sedang Dalam
                                        Proses
                                        Verifikasi Data</button>
                                @elseif($datasantri->user->dataDaftarUlang->status == 1)
                                    <button type="button"
                                        class="btn btn-success btn-block btn-rounded btn-fw text-center mb-3"> Telah
                                        Diterima</button>
                                @elseif($datasantri->user->dataDaftarUlang->status == 2)
                                    <button type="button"
                                        class="btn btn-danger btn-block btn-rounded btn-fw text-center mb-3">Tidak
                                        Daftar Ulang</button>
                                @endif
                            @endif
                        @else
                            <h6 class="font-weight-bold text-center mb-3">DENGAN INI MENYATAKAN BAHWA ANDA
                            </h6>
                            <button type="button"
                                class="btn btn-danger btn-block btn-rounded btn-fw text-center mb-3">Tidak
                                Lulus</button>
                            <p class="text-center text-muted"> Jangan berkecil hati, kesempatan akan datang kepada orang
                                yang terus
                                berjuang, jangan pernah menyerah. semoga sukses dimanapun anda berada.</p>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    @endsection
