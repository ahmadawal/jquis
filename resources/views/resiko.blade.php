@extends('layouts.apps')
@section('content')
<section class="section parallax parallax-3" id="resiko">
  <div class="container overlay pt-4">
    <h1 class="text-center">Jembo Tanggap COVID-19</h1>
    <div class="col-lg-8 inner-bg wow fadeInUp" data-wow-delay="0.5s" id="resiko-visitor">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="col-sm-12 row">
            <div class="col-sm-7">
              <p>Apakah anda memiliki riwayat <u>perjalanan</u> ke negara terjangkir COVID-19 ?</p>
            </div>
            <div class="col-sm-5 row">
              <div class="btn-choice">
                <button class="btn btn-lg btn-warning btn-quis" id="btn-trip-yes">Ya</button>
                <button class="btn btn-lg btn-warning btn-quis" id="btn-trip-no">Tidak</button>
                
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item" id="rs" style="display: none;">
          <div class="col-sm-12 row">
            <div class="col-sm-7">
              <p>Punya keterangan sehat dari <u>Rumah Sakit</u> ?</p>
            </div>
            <div class="col-sm-5 row">
              <div class="btn-choice">
                <button class="btn btn-lg btn-warning btn-quis" id="btn-rs-yes">Ya</button>
                <button class="btn btn-lg btn-warning btn-quis" id="btn-rs-no">Tidak</button>
                
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item" id="kontak">
          <div class="row col-sm-12">
            <div class="col-sm-7">
              <p>Apakah anda memiliki riwayat kontak dengan orang yang positif corona</p>
            </div>
            <div class="col-sm-5 row">
              <div class="btn-choice">
                <button class="btn btn-lg btn-warning btn-quis" id="btn-kontak-yes">Ya</button>
                <button class="btn btn-lg btn-warning btn-quis" id="btn-kontak-no">Tidak</button>
                
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item" id="positif">
          <div class="row col-sm-12">
            <div class="col-sm-7">
              <p>Apakah anda bekerja atau mengunjungi fasilitas kesehatan yang berhubungan dengan pasien terkonfirmasi positif <u>COVID-19</u> ?</p>
            </div>
            <div class="col-sm-5 row">
              <div class="btn-choice">
                <button class="btn btn-lg btn-warning btn-quis" id="btn-positif-yes">Ya</button>
                <button class="btn btn-lg btn-warning btn-quis" id="btn-positif-no">Tidak</button>
                
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="btn-tools">
        <form action="{{ route('visitor.risk') }}" method="post" id="form-risk">
          <button type="button" class="btn btn-warning btn-next" onclick="event.preventDefault();window.history.back();">
            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
            Kembali
          </button>
  
          @csrf
          <input type="hidden" name="id" id="input-id" value="{{ session('id') }}">
          <input type="hidden" name="trip" id="input-trip" class="hidden">
          <input type="hidden" name="rs" id="input-rs" class="hidden">
          <input type="hidden" name="kontak" id="input-kontak" class="hidden">
          <input type="hidden" name="positif" id="input-positif" class="hidden">
          <button type="submit" class="btn btn-warning btn-next" id="btn-risk-visitor" style="float: right;">Selanjutnya <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </form>
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
  // $('#rs').hide();
  // trip
  $('#btn-trip-yes').on('click', function() {
    $("#input-trip").val('ya');
    if ($(this).hasClass('btn-warning'))
    {
      $('#btn-trip-yes').removeClass('btn-warning');
      $('#btn-trip-yes').addClass('btn-dark');
      $('#rs').toggle('slow');
    }
    if ($('#btn-trip-no').hasClass('btn-dark'))
    {
      $('#btn-trip-no').removeClass('btn-dark');
      $('#btn-trip-no').addClass('btn-warning');
    }
  });

  $('#btn-trip-no').on('click', function(){
    $("#input-trip").val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
      if ($('#rs').is(':visible'))
      {
        $('#rs').toggle('slow');
        $('#input-rs').val('');
      }
    }
    if ($('#btn-trip-yes').hasClass('btn-dark'))
    {
      $('#btn-trip-yes').removeClass('btn-dark');
      $('#btn-trip-yes').addClass('btn-warning');
    }
  });
  // rumah sakit
  
  $('#btn-rs-yes').on('click', function(){
    $.alert({
      theme: 'modern',
      type: 'blue',
      icon: 'fa fa-warning',
      title: '',
      content: 'Tunjukan surat keterangan ke security !',
      buttons: {
        ok: {
          btnClass: 'btn-blue',
          action:function () {
            $("#input-rs").val('ya');
          }
        }
      }
    });
    
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-rs-no').hasClass('btn-dark'))
    {
      $('#btn-rs-no').removeClass('btn-dark');
      $('#btn-rs-no').addClass('btn-warning');
    }
  });

  $('#btn-rs-no').on('click', function(){
    $("#input-rs").val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    } 
    if ($('#btn-rs-yes').hasClass('btn-dark'))
    {
      $('#btn-rs-yes').removeClass('btn-dark');
      $('#btn-rs-yes').addClass('btn-warning');
    }
  });
  // kontak
  
  $('#btn-kontak-yes').on('click', function() {
    $("#input-kontak").val('ya');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-kontak-no').hasClass('btn-dark'))
    {
      $('#btn-kontak-no').removeClass('btn-dark');
      $('#btn-kontak-no').addClass('btn-warning');
    }
  });

  $('#btn-kontak-no').on('click', function(){
    $("#input-kontak").val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-kontak-yes').hasClass('btn-dark'))
    {
      $('#btn-kontak-yes').removeClass('btn-dark');
      $('#btn-kontak-yes').addClass('btn-warning');
    }
  });
// positif

  $('#btn-positif-yes').on('click', function() {
    $("#input-positif").val('ya');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-positif-no').hasClass('btn-dark'))
    {
      $('#btn-positif-no').removeClass('btn-dark');
      $('#btn-positif-no').addClass('btn-warning');
    }
  });

  $('#btn-positif-no').on('click', function(){
    $("#input-positif").val('tidak');
    if ($(this).hasClass('btn-warning'))
    {
      $(this).removeClass('btn-warning');
      $(this).addClass('btn-dark');
    }
    if ($('#btn-positif-yes').hasClass('btn-dark'))
    {
      $('#btn-positif-yes').removeClass('btn-dark');
      $('#btn-positif-yes').addClass('btn-warning');
    }
  });

  $('#btn-risk-visitor').click(function(e) {
    e.preventDefault();
    var trip    = $('#input-trip').val();
    var rs      = $('#input-rs').val();
    var kontak  = $('#input-kontak').val();
    var positif = $('#input-positif').val();
    if (kontak === 'ya' || positif === 'ya')
    {
      jegat();
    }
    else if (trip === 'ya' && rs === 'tidak')
    {
      jegat();
    }
    else if ( trip === '' || kontak === '' || positif === '') 
    {
      $.alert({
        theme: 'modern',
        icon: 'fa fa-warning',
        type: 'green',
        title: '',
        content: 'Pertanyaan belum terjawab seluruhnya !',
        buttons: {
          ok: {
            btnClass: 'btn-green',
          }
        }
      });
    }
    else 
    {
      $('#form-risk').submit();
    }
  });

  function jegat() {
    $.dialog({
      theme: 'modern',
      icon: 'fa fa-warning',
      type: 'red',
      modal: true,
      minHeight: 300,
      title: '',
      content: 'Silahkan ke klinik jembo atau klinik terdekat !.',
      buttons: {
        ok: {
          type: 'red',
        }
      }
    });
  }

  function larang() {
    $.dialog({
      columnClass: 'medium',
      icon: 'fa fa-warning',
      type: 'red',
      title: '',
      content: 'Pengunjung tidak diperbolehkan masuk ke kawasan PT. Jembo Cable Company Tbk.',
    });
  }

  function keterangan() {
    $.dialog({
      columnClass: 'medium',
      icon: 'fa fa-warning',
      type: 'red',
      title: '',
      content: 'Pengunjung tidak diperbolehkan masuk ke kawasan PT. Jembo Cable Company Tbk.',
    });
  }
});
</script>
@endpush