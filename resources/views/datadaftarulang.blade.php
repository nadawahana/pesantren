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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Daftar Ulang</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="table w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Santri</th>
                                            <th>Bukti</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataTransfer as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->user->datasantri->nama_lengkap }}</td>
                                                <td>
                                                    @if ($row->bukti_tf)
                                                        <a href="{{ asset('storage/buktiTfUlang/' . $row->bukti_tf) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage/buktiTfUlang/' . $row->bukti_tf) }}"
                                                                alt="..." class="img-thumbnail">
                                                        </a>
                                                    @else
                                                        <img src="{{ asset('images/noimage.jpg') }}" class="img-thumbnail">
                                                    @endif`
                                                </td>
                                                <td>
                                                    @if ($row->status == 0)
                                                        <label class="badge badge-warning">Diajukan</label>
                                                    @elseif($row->status == 1)
                                                        <label class="badge badge-success">Diterima</label>
                                                    @elseif($row->status == 2)
                                                        <label class="badge badge-danger">Ditolak</label>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary edit-data-btn"
                                                        data-toggle="modal"
                                                        data-target="#editModal{{ $row->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger delete-data-btn"
                                                        data-toggle="modal"
                                                        data-target="#deleteModal{{ $row->id }}">Delete</button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="editModal{{ $row->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="editModal{{ $row->id }}Label"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form class="edit-data-form" method="POST"
                                                            action="{{ route('data-daftar-ulang.update', $row->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="editModal{{ $row->id }}Label">
                                                                    Edit Data</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <Label>Nama Santri</Label>
                                                                <input type="hidden" name="id_santri"
                                                                    value="{{ $row->user_id }}" class="form-control"
                                                                    readonly><br>
                                                                <input type="text" name="nama_santri" readonly
                                                                    value="{{ $row->user->datasantri->nama_lengkap }}"
                                                                    class="form-control"><br>
                                                                <label>Status</label>
                                                                <select class="form-control form-control-sm"
                                                                    id="exampleFormControlSelect3" name="status">
                                                                    <option value="1">Diterima</option>
                                                                    <option value="2">Ditolak</option>
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
            fixedColumns: {
                left: 2
            },
            paging: true,
            scrollX: true
        });
    </script>
@endpush
