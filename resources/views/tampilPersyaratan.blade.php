@extends('masteradmin')
@section('content')

<section class="content card" style="padding: 10px 10px 10px 10px ">
  <div class="box">
    @if(session('message'))
    <div class="alert alert-info mt-4">
      {{ session('message') }}
    </div>
    @endif
    <div class="row">
      <div class="col">
        <h3> Data Persyaratan</h3>
      </div>
    </div>
    <div>
    </div>
    <div class="row table-responsive">
      <div class="col">
        <table class="table table-hover table-head-fixed" id='tabelPersyaratan'>
          <thead>
            <tr class="bg-light">
              <th>Nama File</th>
              <th>File</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $Data)
            <tr>
              <td>{{ $Data->{'smt2-kls5'} }}</td>
              <td><img src="{{ asset('public/persyaratan/' . $Data->{'smt2-kls5'}) }}" alt="Image"></td>
              <td>
                <a href="#" class="btn btn-warning" id="" onclick=""> Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>
    </div>
  </div>
</section>

<div class="col-lg-16 stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Nilai semester 1 & 2 kelas 5 dan semester 1 kelas 6</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                Agama
              </th>
              <th>
                PKN
              </th>
              <th>
                Matematika
              </th>
              <th>
                Bahasa Indonesia
              </th>
              <th>
                IPA
              </th>
              <th>
                IPS
              </th>
              <th>
                Seni Budaya
              </th>
              <th>
                Penjaskes
              </th>
              <th>
                N.Rata-Rata
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $Data)
            <tr class="table-info">
              <td>{{ $Data -> {'1kls5_agama'} }}</td>
              <td>{{ $Data -> {'1kls5_bIndo'} }}</td>
              <td>{{ $Data -> {'1kls5_mtk'} }}</td>
              <td>{{ $Data -> {'1kls5_ipa'} }}</td>
              <td>{{ $Data -> {'1kls5_ips'} }}</td>
              <td>{{ $Data -> {'1kls5_senbud'} }}</td>
              <td>{{ $Data -> {'1kls5_penjas'} }}</td>
              <td>{{ $Data -> {'1kls5_rata2'} }}</td>
              <td>{{ $Data -> {'1kls5_agama'} }}</td>
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

@endsection