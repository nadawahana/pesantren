@extends('master')
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
                        {{-- <h3 class="font-weight-bold">Informasi Pendaftaran</h3> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kontak Kami</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Contact Information</h3>
                            <p><span><i class="icon-location"></i></span> JL. H. Mukhtar Tanjung Limau, Pariangan,
                                Simabur,
                                Kec. Pariangan, <br> Kabupaten Tanah Datar, Sumatera Barat 27111</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="template-demo">
                                <a href="tel://6282289132608">
                                    <button type="button" class="btn btn-social-icon-text btn-linkedin d-block mb-2"><i
                                            class="ti-mobile"></i>+6282289132608</button>
                                </a>
                                <a href="https://instagram.com/thawalib.tanjung.limau?igshid=MzRlODBiNWFlZA==">
                                    <button type="button" class="btn btn-social-icon-text btn-dribbble d-block mb-2"><i
                                            class="ti-instagram"></i>@thawalib.tanjung.limau</button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn btn-social-icon-text btn-twitter d-block mb-2"><i
                                            class="ti-email"></i>thawalibtanjunglimau@gmail.com</button>
                                </a>
                                <a href="https://www.facebook.com/pondokpesantrenthawalibtanjunglimau">
                                    <button type="button" class="btn btn-social-icon-text btn-facebook d-block mb-2"><i
                                            class="ti-facebook"></i>Pondok Pesantren Thawalib Tanjung Limau</button>
                                </a>
                                <a href="https://www.youtube.com/@blkkomunitasthawalibtanjun6805">
                                    <button type="button" class="btn btn-social-icon-text btn-youtube d-block mb-2"><i
                                            class="ti-youtube"></i>BLK KOMUNITAS THAWALIB TANJUNG LIMAU
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
@endsection
