@extends('masteradmin')
@push('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
@endpush
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        @if (session('message'))
            <div class="alert alert-info mt-4">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h3 class="font-weight-bold">Data Persyaratan {{ $data->santri->datasantri->nama_lengkap }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Persyaratan</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-hover table-head-fixed" id='tabelPersyaratan'>
                                        <thead>
                                            <tr class="bg-light">
                                                <th>Nama File</th>
                                                <th>File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataDokumen as $key => $value)
                                                @if ($key == 'Tingkat Penghargaan')
                                                    @continue
                                                @endif
                                                <tr>
                                                    <td>{{ $key }}</td>
                                                    <td>
                                                        <a href="{{ asset('storage/persyaratan/' . $value) }}"
                                                            target="_blank">
                                                            Lihat
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row mt-3">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nilai Semester 1 Kelas 5</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Agama</th>
                                        <th>PKN</th>
                                        <th>Matematika</th>
                                        <th>Bahasa Indonesia</th>
                                        <th>IPA</th>
                                        <th>IPS</th>
                                        <th>Seni Budaya</th>
                                        <th>Penjaskes</th>
                                        <th>N.Rata-Rata</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-info">
                                        <td>{{ $dataNilai->{'1kls5_agama'} }}</td>
                                        <td>{{ $dataNilai->{'1kls5_pkn'} }}</td>
                                        <td>{{ $dataNilai->{'1kls5_mtk'} }}</td>
                                        <td>{{ $dataNilai->{'1kls5_bIndo'} }}</td>
                                        <td>{{ $dataNilai->{'1kls5_ipa'} }}</td>
                                        <td>{{ $dataNilai->{'1kls5_ips'} }}</td>
                                        <td>{{ $dataNilai->{'1kls5_senbud'} }}</td>
                                        <td>{{ $dataNilai->{'1kls5_penjas'} }}</td>
                                        <td>{{ $dataNilai->{'1kls5_rata2'} }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nilai Semester 2 Kelas 5</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Agama</th>
                                        <th>PKN</th>
                                        <th>Matematika</th>
                                        <th>Bahasa Indonesia</th>
                                        <th>IPA</th>
                                        <th>IPS</th>
                                        <th>Seni Budaya</th>
                                        <th>Penjaskes</th>
                                        <th>N.Rata-Rata</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-info">
                                        <td>{{ $dataNilai->{'2kls5_agama'} }}</td>
                                        <td>{{ $dataNilai->{'2kls5_pkn'} }}</td>
                                        <td>{{ $dataNilai->{'2kls5_mtk'} }}</td>
                                        <td>{{ $dataNilai->{'2kls5_bIndo'} }}</td>
                                        <td>{{ $dataNilai->{'2kls5_ipa'} }}</td>
                                        <td>{{ $dataNilai->{'2kls5_ips'} }}</td>
                                        <td>{{ $dataNilai->{'2kls5_senbud'} }}</td>
                                        <td>{{ $dataNilai->{'2kls5_penjas'} }}</td>
                                        <td>{{ $dataNilai->{'2kls5_rata2'} }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nilai Semester 1 Kelas 6</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Agama</th>
                                        <th>PKN</th>
                                        <th>Matematika</th>
                                        <th>Bahasa Indonesia</th>
                                        <th>IPA</th>
                                        <th>IPS</th>
                                        <th>Seni Budaya</th>
                                        <th>Penjaskes</th>
                                        <th>N.Rata-Rata</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-info">
                                        <td>{{ $dataNilai->{'1kls6_agama'} }}</td>
                                        <td>{{ $dataNilai->{'1kls6_pkn'} }}</td>
                                        <td>{{ $dataNilai->{'1kls6_mtk'} }}</td>
                                        <td>{{ $dataNilai->{'1kls6_bIndo'} }}</td>
                                        <td>{{ $dataNilai->{'1kls6_ipa'} }}</td>
                                        <td>{{ $dataNilai->{'1kls6_ips'} }}</td>
                                        <td>{{ $dataNilai->{'1kls6_senbud'} }}</td>
                                        <td>{{ $dataNilai->{'1kls6_penjas'} }}</td>
                                        <td>{{ $dataNilai->{'1kls6_rata2'} }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
    <script>
        $('#example').dataTable({
            paging: true,
            scrollX: true,
            columnDefs: [{
                "orderable": false,
                "targets": 4
            }]
        });
    </script>
@endpush
