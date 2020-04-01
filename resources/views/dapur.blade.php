@extends('layouts.apps')
@section('content')
<div class="container-fluid">
  <div class="responsive">
    <table class="table table-striped table-hover" id="visitor-table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Instansi</th>
          <th>Hp</th>
          <th>Alamat</th>
          <th>Tgl Lahir</th>
          <th>Temperature</th>
          <th>Demam</th>
          <th>Batuk</th>
          <th>Pilek</th>
          <th>Nyeri</th>
          <th>Sesak</th>
          <th>Perjalanan</th>
          <th>ket. RS</th>
          <th>Kontak</th>
          <th>Hubungan</th>
          <th>Photo</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <td>{{$item->nama}}</td>
          <td>{{$item->instansi}}</td>
          <td>{{$item->hp}}</td>
          <td>{{$item->alamat}}</td>
          <td>{{$item->tgl_lahir}}</td>
          <td>{{$item->temperature}}</td>
          <td>{{$item->demam}}</td>
          <td>{{$item->batuk}}</td>
          <td>{{$item->pilek}}</td>
          <td>{{$item->nyeri}}</td>
          <td>{{$item->sesak}}</td>
          <td>{{$item->perjalanan}}</td>
          <td>{{$item->keteranganrs}}</td>
          <td>{{$item->kontak}}</td>
          <td>{{$item->hubungan}}</td>
          <td>
            <img src="{{ asset('visitor_img/'.$item->filename) }}" alt="" height="100px">
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
@push('style')
<link rel="stylesheet" href="{{ asset('plugins/datatables.net-dt/css/jquery.dataTables.min.css') }}">
@endpush
@push('script')
<script src="{{ asset('plugins/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
<script>
$(function () {
  $('#visitor-table').DataTable();
});
</script>
@endpush