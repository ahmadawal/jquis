@extends('layouts.apps')
@section('content')
<section class="section parallax parallax-1">
  <div class="container overlay pt-4">
    <h1 class="text-center">Jembo Tanggap COVID-19</h1>
    <div class="col-lg-6 inner-bg" id="data-visitor">
      <form id="form-visitor" style="padding-bottom: 50px;" method="POST" action="{{ route('visitor.data') }}">
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Nama</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="nama" id="nama" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Instansi</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="instansi" id="instansi" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Nomor HP</label>
          <div class="col-lg-8">
            <input type="number" class="form-control" name="hp" id="hp" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Alamat Domisili</label>
          <div class="col-lg-8">
            <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control" required></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Tgl. Lahir</label>
          <div class="col-lg-8">
            {{-- <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" data-inputmask="'mask': 'dd/mm/yyyy'" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm//yyyy" data-mask> --}}
            {{-- <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="hari/bulan/tahun" /> --}}
            <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" data-inputmask="'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy', 'placeholder': 'dd/mm/yyyy'">
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Suhu terukur</label>
          <div class="col-lg-8 input-group">
            <input type="text" class="form-control" name="temperature" id="temperature">
            <div class="input-group-append">
              <span class="input-group-text">&#8451;</span>
            </div>
          </div>
        </div>
        <div class="form-group">
          {{-- <button class="btn btn-primary" id="swal-test">Swal</button> --}}
          <button class="btn btn-lg btn-warning btn-next" id="btn-data-visitor" style="float: right;">
            @csrf
            Medical CheckUp
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection

@push('style')
<style>

</style>
@endpush
@push('script')

<script>
$(document).ready(function () {
  // $('#swal-test').click(function () {
  //   swal({
  //     title: 'Warining',
  //     text: 'dfghjkliuytr',
  //     icon: 'success',
  //   });
  // });

  // $('.datepicker').datepicker({
  //   format: "dd/mm/yyyy",
  //   clearBtn: true,s
  //   language: "id",
  //   autoclose: true,
  //   todayHighlight: true
  // });
  $(':input').inputmask();
  $('[data-mask]').inputmask();
  
  $('#btn-data-visitor').on('click', function(e) {
    varInput();
    if (temperature == '')
    {
      e.preventDefault();
      dataBelumLengkap();
    }
    // saveData();
  });

  function dataBelumLengkap()
  {
    $.alert({
      theme: 'modern',
      animation: 'scale',
      closeAnimation: 'zoom',
      icon: 'fa fa-warning',
      type: 'red',
      title: '',
      content: 'Data belum lengkap !',
      buttons: {
        ok: {
          btnClass: 'btn-red'
        }
      }
    });
  }

  function varInput()
  {
    nama = $('#nama').val();
    instansi = $('#instansi').val();
    hp = $('#hp').val();
    alamat = $('#alamat').val();
    tgl_lahir = $('#tgl_lahir').val();
    temperature = $('#temperature').val();
    demam = '';
    batuk = '';
    pilek = '';
    nyeri = '';
    sesak = '';
    trip = '';
    keteranganrs = '';
    kontak = '';
    positif = '';
  }

  function saveData()
  {
    varInput();
    $.ajax({
      type: "post",
      url: "{{ route('visitor.data') }}",
      data: {
        'nama': nama,
        'instansi': instansi,
        'hp': hp,
        'alamat': alamat, 
        'tgl_lahir': tgl_lahir,
        'temperature': temperature,
      },
      dataType: "json",
      success: function (response) {
        console.log(response.data);
        $('#form-visitor').trigger('reset');
        window.location.href = 'medical';
      },
      error: function(response) {
        console.log(response);
      }
    });
  }

  function test()
  {
    alert(nama+instansi+hp+alamat+tgl_lahir+temperature);
  }

  function jegat() {
    $.dialog({
      columnClass: 'medium',
      theme: 'supervan',
      columnClass: 'medium',
      icon: 'fa fa-warning',
      type: 'red',
      modal: true,
      minHeight: 300,
      title: '',
      content: 'Silahkan ke klinik jembo atau klinik terdekat !.',
      button: {
        ok: {
          btnClass: 'btn-red'
        }
      }
    });
  }

  function larang() {
    $.dialog({
      columnClass: 'medium',
      theme: 'supervan',
      columnClass: 'medium',
      icon: 'fa fa-warning',
      type: 'red',
      title: '',
      content: 'Pengunjung tidak diperbolehkan masuk ke kawasan PT. Jembo Cable Company Tbk.',
      button: {
        ok: {
          btnClass: 'btn-red'
        }
      }
    });
  }
});
</script>

@endpush