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
                        {{-- <h3 class="font-weight-bold">Informasi Pendaftaran</h3> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="p-2">
                            <h4 class="card-title">Pemberitahuan</h4>
                        </div>
                        <div class="ml-auto p-2">
                            <a href="{{ route('notifikasi.create') }}">
                                <button id="showFormBtn" class="btn btn-primary">Tambah Data</button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="table w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Santri</th>
                                            <th>NISN</th>
                                            <th>Pemberitahuan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->receiver->datasantri->nama_lengkap }}</td>
                                                <td>{{ $row->receiver->datasantri->nisn }}</td>
                                                <td>{{ $row->pesan }}</td>
                                                <td>
                                                    @if ($row->status == 0)
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm btn-rounded btn-fw">Belum
                                                            Dibaca</button>
                                                    @else
                                                        <button type="button"
                                                            class="btn btn-success  btn btn-rounded btn-fw">Dibaca</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm delete-data-btn"
                                                        data-toggle="modal"
                                                        data-target="#deleteModal{{ $row->id }}">Delete</button>
                                                    <!-- Delete Data Modal -->
                                                    <div class="modal fade" id="deleteModal{{ $row->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="deleteModal{{ $row->id }}Label"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form class="delete-data-form" method="POST"
                                                                    action="{{ route('notifikasi.destroy', $row->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="deleteModal{{ $row->id }}Label">
                                                                            Delete Data</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete this data?</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
