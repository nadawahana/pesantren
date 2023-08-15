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
                    <h4 class="card-title">Pemberitahuan</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="table w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal/Waktu</th>
                                            <th>Pemberitahuan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->created_at->isoFormat('dddd, D MMMM Y') }} /
                                                    {{ $row->created_at->format('H:i') }}
                                                </td>
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
                                                    <form action="{{ route('pemberitahuan.status', $row->id) }}"
                                                        method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm delete-data-btn">Delete</button>
                                                    </form>
                                                    <!-- Delete Data Modal -->
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
