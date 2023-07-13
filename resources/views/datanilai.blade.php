@extends('masteradmin')
@section('content')
<div class="content-wrapper">
  @if(session('message'))
  <div class="alert alert-info mt-4">
    {{ session('message') }}
  </div>
  @endif
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Nilai Ujian Lisan dan Tulisan</h3>
        </div>
        <div class="col-12 col-xl-4">
          <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button id="showFormBtn" class="btn btn-primary">Add Data</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- partial -->

  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive pt-1">
    <table class="table table-bordered" id="dataTable">
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
              @foreach($dataNilaiTotal as $nilaiTotal)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $nilaiTotal->nama_santri }}</td>
                <td>{{ $nilaiTotal->baca_alquran_input }}</td>
                <td>{{ $nilaiTotal->sholat_input }}</td>
                <td>{{ $nilaiTotal->tahfidz_input }}</td>
                <td>{{ $nilaiTotal->ujian_tulisan_input }}</td>
                <td>{{ $nilaiTotal->status }}</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm edit-data-btn" data-toggle="modal" data-target="#editModal{{ $nilaiTotal->id }}">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm delete-data-btn" data-toggle="modal" data-target="#deleteModal{{ $nilaiTotal->id }}">Delete</button>
                </td>
              </tr>
              <div class="modal fade" id="editModal{{ $nilaiTotal->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $nilaiTotal->id }}Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form class="edit-data-form" method="POST" action="{{ route('nilai-total.update', ['id' => $nilaiTotal->id]) }}">
                      @csrf
                      @method('PUT')
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModal{{ $nilaiTotal->id }}Label">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <label>Nama Santri</label>
                        <input type="text" name="nama_santri" value="{{ $nilaiTotal->nama_santri }}" class="form-control"><br>
                        <label>Baca Alquran</label>
                        <input type="text" name="baca_alquran_input" value="{{ $nilaiTotal->baca_alquran_input }}" class="form-control"><br>
                        <label>Sholat</label>
                        <input type="text" name="sholat_input" value="{{ $nilaiTotal->sholat_input }}" class="form-control"><br>
                        <label>Tahfidz</label>
                        <input type="text" name="tahfidz_input" value="{{ $nilaiTotal->tahfidz_input }}" class="form-control"><br>
                        <label>Ujian Tulisan</label>
                        <input type="text" name="ujian_tulisan_input" value="{{ $nilaiTotal->ujian_tulisan_input }}" class="form-control">
                        <label>Status</label>
                        <input type="text" name="status" value="{{ $nilaiTotal->status }}" class="form-control">
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Delete Data Modal -->
              <div class="modal fade" id="deleteModal{{ $nilaiTotal->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal{{ $nilaiTotal->id }}Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form class="delete-data-form" method="POST" action="{{ route('nilai-total.destroy', ['id' => $nilaiTotal->id]) }}">
                      @csrf
                      @method('DELETE')
                      <div class="modal-header">
                        <h5 class="modal-title" id="deleteModal{{ $nilaiTotal->id }}Label">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Are you sure you want to delete this data?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
  <br>

  <div id="addDataForm" style="display: none;">
    <form id="addDataForm" method="POST" action="{{ route('nilai-total.store') }}" enctype="multipart/form-data">
      @csrf
      <form class="form-sample">
        <div class="form-group">
          <label for="exampleInputName1">Nama Santri</label>
          <input type="text" class="form-control" name="nama_santri" placeholder="Nama Santri" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Baca Al-quran</label>
          <input type="text" class="form-control" name="baca_alquran_input" placeholder="Baca Al-Quran" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Sholat</label>
          <input type="text" class="form-control" name="sholat_input" placeholder="Sholat" required>
        </div>
        <div class="form-group">
          <label for="exampleInputtanggallahir">Tahfidz</label>
          <input type="text" class="form-control" name="tahfidz_input" placeholder="Tahfidz" required>
        </div>
        <div class="form-group">
          <label for="exampleInputasalsekolah">Ujian Tulisan</label>
          <input type="text" class="form-control" name="ujian_tulisan_input" placeholder="Ujian Tulisan" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Data</button>

      </form>
    </form>
  </div>
</div>
</div>
</div>
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
@endsection