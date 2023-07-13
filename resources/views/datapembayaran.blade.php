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
          <h3 class="font-weight-bold">Data Pembayaran</h3>
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

  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive pt-1">
          <table class="table table-bordered">
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
              @foreach($dataNilaiTotal as $nilaiTotal)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$nilaiTotal->user_id}}</td>
                <td><img src="{{ asset('public/persyaratan' . $nilaiTotal->file_name) }}" alt="Image"></td>
                <td>{{$nilaiTotal->status}}</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm edit-data-btn" data-toggle="modal" data-target="#editModal{{ $nilaiTotal->id }}">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm delete-data-btn" data-toggle="modal" data-target="#deleteModal{{ $nilaiTotal->id }}">Delete</button>
                </td>
              </tr>
              <div class="modal fade" id="editModal{{ $nilaiTotal->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $nilaiTotal->id }}Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form class="edit-data-form" method="POST" action="{{ route('data-pembayaran.update', ['id' => $nilaiTotal->id]) }}">
                      @csrf
                      @method('PUT')
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModal{{ $nilaiTotal->id }}Label">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <Label>Nama Santri</Label>
                        <input type="text" name="nama_santri" value="{{ $nilaiTotal->user_id }}" class="form-control"><br>
                        <label>Status</label>
                        <input type="text" name="baca_alquran_input" value="{{ $nilaiTotal->status }}" class="form-control">
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
                    <form class="delete-data-form" method="POST" action="{{ route('data-pembayaran.destroy', ['id' => $nilaiTotal->id]) }}">
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

  @endsection