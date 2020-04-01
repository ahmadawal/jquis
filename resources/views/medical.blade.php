@extends('layouts.apps')
@section('content')
<section class="section parallax parallax-2" id="medical">
  <div class="container overlay pt-4">
    <div class="col-lg-8 inner-bg wow fadeInDown" id="checkup-visitor"  data-wow-delay="0.5s">
      <h2 class="text-center">Medical Check Up</h2>
      <div class="checkup">
        <ul class="list-group list-group-flush">
          <li class="list-group-item" id="demam">
            <div class="col-sm-12 row">
              <div class="col-sm-7">
                <p>Apakah anda mengalami <u>DEMAM</u></p>
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-demam"></span></p>
              </div>
              <div class="row col-sm-5">
                <div class="btn-tools">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-demam-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-demam-no">Tidak</button>
                  
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item" id="batuk">
            <div class="col-sm-12 row">
              <div class="col-sm-7">
                <p>Apakah anda Sedang <u>BATUK</u></p>
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-batuk"></span></p>
              </div>
              <div class="col-sm-5 row">
                <div class="btn-tools">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-batuk-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-batuk-no">Tidak</button>
                  
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item" id="pilek">
            <div class="col-sm-12 row">
              <div class="col-sm-7">
                <p>Apakah anda mengalami <u>PILEK</u></p>
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-pilek"></span></p>
              </div>
              <div class="col-sm-5 row">
                <div class="btn-tools float-right">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-pilek-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-pilek-no">Tidak</button>
                  
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item" id="nyeri">
            <div class="col-sm-12 row">
              <div class="col-sm-7">
                <p>Anda merasa <u>NYERI DI TENGGOROKAN</u></p>
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-nyeri"></span></p>
              </div>
              <div class="col-sm-5 row">
                <div class="btn-tools">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-nyeri-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-nyeri-no">Tidak</button>
                  
                </div>
              </div>
            </div>
          </li>

          <li class="list-group-item" id="sesak">
            <div class="col-sm-12 row">
              <div class="col-sm-7">
                <p>Apakah anda merasa <u>SESAK NAFAS</u></p >
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-sesak"></span></p>
              </div>
              <div class="col-sm-5 row">
                <div class="btn-tools">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-sesak-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-sesak-no">Tidak</button>
                  
                </div>
              </div>
            </div>
          </li>
        </ul>

        <div class="btn-tools">
          <form action="{{ route('visitor.medic') }}" method="post" id="form-medic">
            <button class="btn btn-warning btn-next" onclick="event.preventDefault(); window.history.back();">
              <i class="fa fa-angle-double-left" aria-hidden="true"></i>
              Kembali
            </button>
          
            @csrf
            <input type="hidden" name="id" id="input-id" value="{{ session('id') }}">
            <input type="hidden" name="demam" id="input-demam" class="hidden">
            <input type="hidden" name="batuk" id="input-batuk" class="hidden">
            <input type="hidden" name="pilek" id="input-pilek" class="hidden">
            <input type="hidden" name="nyeri" id="input-nyeri" class="hidden">
            <input type="hidden" name="sesak" id="input-sesak" class="hidden">
            <button type="submit" class="btn btn-warning btn-next" id="btn-medical-visitor" style="float: right;">
              Selanjutnya
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@push('style')
    
@endpush
@push('script')
<script>
$(function () {
  // demam
  $('#btn-demam-yes').on('click', function(e) {
    e.preventDefault();
    $('#input-demam').val('ya');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-demam-no').hasClass('btn-dark')) 
    {
      $('#btn-demam-no').removeClass('btn-dark');
      $('#btn-demam-no').addClass('btn-warning');
    }
  });

  $('#btn-demam-no').on('click', function(e) {
    e.preventDefault();
    $('#input-demam').val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-demam-yes').hasClass('btn-dark'))
    {
      $('#btn-demam-yes').removeClass('btn-dark');
      $('#btn-demam-yes').addClass('btn-warning');
    }
  });
// batuk
  
  $('#btn-batuk-yes').on('click', function(e) {
    varInput();
    $('#input-batuk').val('ya');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-batuk-no').hasClass('btn-dark'))
    {
      $('#btn-batuk-no').removeClass('btn-dark');
      $('#btn-batuk-no').addClass('btn-warning');
    }
  });

  $('#btn-batuk-no').on('click', function(e) {
    e.preventDefault();
    $('#input-batuk').val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-batuk-yes').hasClass('btn-dark'))
    {
      $('#btn-batuk-yes').removeClass('btn-dark');
      $('#btn-batuk-yes').addClass('btn-warning');
    }
  });
  // pilek
  $('#btn-pilek-yes').on('click', function(e) {
    e.preventDefault();
    $('#input-pilek').val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-pilek-no').hasClass('btn-dark'))
    {
      $('#btn-pilek-no').removeClass('btn-dark');
      $('#btn-pilek-no').addClass('btn-warning');
    }
  });

  $('#btn-pilek-no').on('click', function(e) {
    e.preventDefault();
    $('#input-pilek').val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-pilek-yes').hasClass('btn-dark'))
    {
      $('#btn-pilek-yes').removeClass('btn-dark');
      $('#btn-pilek-yes').addClass('btn-warning');
    }
  });
  // nyeri
  $('#btn-nyeri-yes').on('click', function(e) {
    e.preventDefault();
    $('#input-nyeri').val('ya');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-nyeri-no').hasClass('btn-dark'))
    {
      $('#btn-nyeri-no').removeClass('btn-dark');
      $('#btn-nyeri-no').addClass('btn-warning');
    }
  });

  $('#btn-nyeri-no').on('click', function(e) {
    e.preventDefault();
    $('#input-nyeri').val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-nyeri-yes').hasClass('btn-dark'))
    {
      $('#btn-nyeri-yes').removeClass('btn-dark');
      $('#btn-nyeri-yes').addClass('btn-warning');
    }
  });
// sesak
  
  $('#btn-sesak-yes').on('click', function(e) {
    e.preventDefault();
    $('#input-sesak').val('ya');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-sesak-no').hasClass('btn-dark'))
    {
      $('#btn-sesak-no').removeClass('btn-dark');
      $('#btn-sesak-no').addClass('btn-warning');
    }
  });

  $('#btn-sesak-no').on('click', function() {
    $('#input-sesak').val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-sesak-yes').hasClass('btn-dark'))
    {
      $('#btn-sesak-yes').removeClass('btn-dark');
      $('#btn-sesak-yes').addClass('btn-warning');
    }
    // window.location.href = 'resiko';
  });

  $('#btn-medical-visitor').on('click', function (e){
    e.preventDefault();
    var demam = $('#input-demam').val();
    var batuk = $('#input-batuk').val();
    var pilek = $('#input-pilek').val();
    var nyeri = $('#input-nyeri').val();
    var sesak = $('#input-sesak').val();
    if (demam === 'ya') {
      jegat();
    } else if (batuk === 'ya') {
      jegat();
    } else if (pilek === 'ya') {
      jegat();
    } else if (nyeri === 'ya') {
      jegat();
    } else if (sesak === 'ya') {
      jegat();
    }
    else 
    {
      $('#form-medic').submit();
    }
  });

  function varInput()
  {
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

  function initQuis()
  {
    $('#kontak').hide();
    $('#positif').hide();
    $('#batuk').hide();
    $('#pilek').hide();
    $('#nyeri').hide();
    $('#sesak').hide();
  }

  function jegat() {
    $.dialog({
      icon: 'fa fa-warning',
      type: 'red',
      title: '',
      content: 'Silahkan ke klinik jembo atau klinik terdekat !.',
    });
  }

  function larang() {
    $.dialog({
      icon: 'fa fa-warning',
      type: 'red',
      title: '',
      content: 'Pengunjung tidak diperbolehkan masuk ke kawasan PT. Jembo Cable Company Tbk.',
    })
  }
});
</script>
@endpush