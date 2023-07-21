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
            <div class="card" id="addDataForm" style="display: none;">
                <div class="card-body">
                    <form id="addDataForm" method="POST" action="{{ route('nilai-total.store') }}"
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
                                <label for="exampleInputEmail3">Baca Al-quran</label>
                                <input type="number" class="form-control" name="baca_alquran" placeholder="Baca Al-Quran"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Sholat</label>
                                <input type="number" class="form-control" name="sholat" placeholder="Sholat" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtanggallahir">Tahfidz</label>
                                <input type="number" class="form-control" name="tahfidz" placeholder="Tahfidz" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputasalsekolah">Ujian Tulisan</label>
                                <input type="number" class="form-control" name="ujian_tulisan" placeholder="Ujian Tulisan"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Data</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Orang Tua Santri</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="table w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Santri</th>
                                            <th>Baca Al-Quran</th>
                                            <th>Sholat</th>
                                            <th>Tahfidz</th>
                                            <th>Ujian Tulisan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataNilaiTotal as $nilaiTotal)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilaiTotal->santri->datasantri->nama_lengkap ?? '-' }}</td>
                                                <td>{{ $nilaiTotal->baca_alquran }}</td>
                                                <td>{{ $nilaiTotal->sholat }}</td>
                                                <td>{{ $nilaiTotal->tahfidz }}</td>
                                                <td>{{ $nilaiTotal->ujian_tulisan }}</td>
                                                <td>
                                                    @if ($nilaiTotal->santri->status_kelulusan == 1)
                                                        <button type="button"
                                                            class="btn btn-success btn-rounded btn-fw">Lulus</button>
                                                    @elseif ($nilaiTotal->santri->status_kelulusan == 2)
                                                        <button type="button"
                                                            class="btn btn-danger btn-rounded btn-fw">Tidak Lulus</button>
                                                    @elseif ($nilaiTotal->santri->status_kelulusan == 0)
                                                        <button type="button"
                                                            class="btn btn-primary btn-rounded btn-fw">Proses</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm edit-data-btn"
                                                        data-toggle="modal"
                                                        data-target="#editModal{{ $nilaiTotal->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger btn-sm delete-data-btn"
                                                        data-toggle="modal"
                                                        data-target="#deleteModal{{ $nilaiTotal->id }}">Delete</button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="editModal{{ $nilaiTotal->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="editModal{{ $nilaiTotal->id }}Label"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form class="edit-data-form" method="POST"
                                                            action="{{ route('nilai-total.update', ['id' => $nilaiTotal->id]) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="editModal{{ $nilaiTotal->id }}Label">
                                                                    Edit Data</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label>Nama Santri</label>
                                                                    <input type="hidden" name="nama_santri"
                                                                        value="{{ $nilaiTotal->user_id }}"
                                                                        class="form-control" readonly>
                                                                    <input type="text"
                                                                        value="{{ $nilaiTotal->santri->datasantri->nama_lengkap }}"
                                                                        class="form-control" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Baca Alquran</label>
                                                                    <input type="text" name="baca_alquran"
                                                                        value="{{ $nilaiTotal->baca_alquran }}"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Sholat</label>
                                                                    <input type="text" name="sholat"
                                                                        value="{{ $nilaiTotal->sholat }}"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tahfidz</label>
                                                                    <input type="text" name="tahfidz"
                                                                        value="{{ $nilaiTotal->tahfidz }}"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Ujian Tulisan</label>
                                                                    <input type="text" name="ujian_tulisan"
                                                                        value="{{ $nilaiTotal->ujian_tulisan }}"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    {{-- <input type="text" name="status"
                                                                        value="{{ $nilaiTotal->status }}"
                                                                        class="form-control"> --}}
                                                                    <select class="form-control"
                                                                        id="exampleFormControlSelect2"
                                                                        name="status_kelulusan">
                                                                        <option>-- Proses --</option>
                                                                        <option value="1"
                                                                            {{ $nilaiTotal->santri->status_kelulusan == 1 ? 'selected' : '' }}>
                                                                            Lulus</option>
                                                                        <option value="2"
                                                                            {{ $nilaiTotal->santri->status_kelulusan == 2 ? 'selected' : '' }}>
                                                                            Tidak Lulus</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Update</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Data Modal -->
                                            <div class="modal fade" id="deleteModal{{ $nilaiTotal->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="deleteModal{{ $nilaiTotal->id }}Label"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form class="delete-data-form" method="POST"
                                                            action="{{ route('nilai-total.destroy', ['id' => $nilaiTotal->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="deleteModal{{ $nilaiTotal->id }}Label">
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
    <script>
        $(document).ready(function() {
            $("#showFormBtn").click(function() {
                $("#addDataForm").show();
            });
        });
    </script>
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/skydash/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/skydash/vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/skydash/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets/skydash/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/skydash/js/select2.js') }}"></script>
    <!-- End custom js for this page-->
@endpush

{{-- @push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#showFormBtn").click(function() {
                $("#addDataForm").show();
            });
        });
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush --}}
