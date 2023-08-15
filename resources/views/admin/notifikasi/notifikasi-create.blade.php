@extends('masteradmin')
@push('css')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/skydash/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/skydash/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
@endpush
@section('content')
    {{-- @php
        dd($datasantri);
    @endphp --}}
    <div class="content-wrapper">
        @if (session('message'))
            <div class="alert alert-info mt-4">
                {{ session('message') }}
            </div>
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
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-12 col-xl-8 d-flex align-self-center">
                        <h3 class="font-weight-bold">Nilai Ujian Lisan dan Tulisan</h3>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button id="showFormBtn" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->
        <div class="col-lg-12 stretch-card mb-3">
            <div class="card">
                <div class="card-body">
                    <form id="addDataForm" method="POST" action="{{ route('notifikasi.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <form class="form-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Santri</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="nama_santri">
                                    <option>-- Nama Santri --</option>
                                    @foreach ($datasantri as $row)
                                        <option value="{{ $row->user_id }}">{{ $row->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea class="form-control" name="pesan" placeholder="Masukan pesan yang ingin disampaikan" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
    <script>
        $('#example').dataTable({
            fixedColumns: {
                left: 2
            },
            paging: true,
            scrollX: true,
            columnDefs: [{
                "orderable": false,
                "targets": 1
            }]
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endpush
