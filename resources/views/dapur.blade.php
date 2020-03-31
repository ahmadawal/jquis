@extends('layouts.apps')
@section('content')
<div class="container-fluid">
  <div class="responsive">
    <table class="table table-striped">
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
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection