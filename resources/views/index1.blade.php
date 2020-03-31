@extends('layouts.master')
@section('title')Jembo Cable Tanggap COVID-19 @endsection
@section('content')
<div class="content">
  <div class="form-data-visitor form-box w-100 p-3 row " data-wow-duration="1s" data-wow-delay="0s">
    <div class="col-lg-6">
      <form class="form">
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Nama</label>
          <div class="col-lg-8">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Instansi</label>
          <div class="col-lg-8">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Nomor HP</label>
          <div class="col-lg-8">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Alamat Domisili</label>
          <div class="col-lg-8">
            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Tgl. Lahir</label>
          <div class="col-lg-8">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="form-control-label col-lg-4">Temperatur tubuh</label>
          <div class="col-lg-8">
            <input type="text" class="form-control">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <button class="btn btn-warning btn-next" onclick="call next()">
          Catatan kesehatan
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>
  <div class="parallax"></div>
  <section class="medical">
    <div class="form-quis-visitor wow fadeInDown" data-wow-delay="1s">
      <h2>Medical Check Up</h2>
      <div class="gejala">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="col-sm-12 row">
              <div class="col-sm-8">
                <p>Apakah anda mengalami <u>DEMAM</u></p>
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-demam"></span></p>
              </div>
              <div class="row col-sm-4">
                <div class="btn-tools">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-demam-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-demam-yes">Tidak</button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="col-sm-12 row">
              <div class="col-sm-8">
                <p>Apakah anda Sedang <u>BATUK</u></p>
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-batuk"></span></p>
              </div>
              <div class="col-sm-4 row">
                <div class="btn-tools">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-batuk-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-bauk-no">Tidak</button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="col-sm-12 row">
              <div class="col-sm-8">
                <p>Apakah anda mengalami <u>PILEK</u></p>
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-pilek"></span></p>
              </div>
              <div class="col-sm-4 row">
                <div class="btn-tools float-right">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-pilek-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-nyeri-no">Tidak</button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="col-sm-12 row">
              <div class="col-sm-8">
                <p>Anda merasa <u>NYERI DI TENGGOROKAN</u></p>
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-nyeri"></span></p>
              </div>
              <div class="col-sm-4 row">
                <div class="btn-tools">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-nyeri-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-nyeri-no">Tidak</button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="col-sm-12 row">
              <div class="col-sm-8">';
                <p>Apakah anda merasa <u>SESAK NAFAS</u></p >
                <p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-sesak"></span></p>
              </div>
              <div class="col-sm-4 row">
                <div class="btn-tools float-right">
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-sesak-yes">Ya</button>
                  <button class="btn btn-lg btn-warning btn-quis" id="btn-sesak-no">Tidak</button>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <button class="btn btn-danger" onclick="window.history.back()">Kembali</button>
      </div>
    </div>
  </section>
  
</div>
@endsection
@push('style')
<link rel="stylesheet" href="/css/cover.css">
<link rel="stylesheet" href="/plugins/wowjs/animate.css">
<link rel="stylesheet" href="/plugins/wowjs/site.min.css">
<style>
.parallax {
  background-image: url('/images/wallpaper.jpg');
  min-height: 100%;
  min-width: 100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.form-box {
  width: 100%;
  background: rgba(0, 0, 0, 0.16);
  border-radius: 10px;
  padding: 22px 13px;
  margin-top: -50PX;
  -webkit-box-shadow: 0px 0px 34px 0px rgba(255,255,255,0.34);
  -moz-box-shadow: 0px 0px 34px 0px rgba(255,255,255,0.34);
  box-shadow: 0px 0px 34px 0px rgba(255,255,255,0.34);
}

.list-group-item {
  width: 75%;
  background: rgba(0, 0, 0, 0.16);
  border-radius: 10px;
  padding: 5px 13px;
  margin-bottom: 10px;
  -webkit-box-shadow: 0px 0px 20px 0px rgba(255,255,255,0.34);
  -moz-box-shadow: 0px 0px 20px 0px rgba(255,255,255,0.34);
  box-shadow: 0px 0px 20px 0px rgba(255,255,255,0.34);
}

h1, h2, h3, h4 {
  color: #ffffff;
}

p, .p-bawah{
  color: rgb(255, 187, 0);
  font-size: 1.8em;
  text-align: left;
}

.p-bawah {
  margin-top: -20px;
  padding-bottom: -10px;
}

b {
  color: rgb(255, 187, 0);
}

.quis {
  font-size: 1.8em;
}

.form-control-label {
  color: rgb(255, 187, 0);
  font-size: 1.8em;
  font-weight: 600;
  text-align: left;
}

.form-control {
  background-color: transparent !important;
  color: #fff;
  border: 2px solid rgb(255, 187, 0);
  height: 48px;
}

.form-control:focus {
  background-color: rgba(0, 0, 0, 0.13);
  color: #fff;
}

li.list-group-item {
  color: #ffffff;
  background: transparent;
}

.btn-next {
  margin: 0 auto;
  font-size: 2em;
}

.btn-quis {
  width: 100px;
}

.btn-tools {
  padding: 0;
  margin-top: 10px 0 0 0;
  text-align: left;
}

</style> 
@endpush
@push('script')
<script src="/plugins/wowjs/wow.min.js"></script>
<script>
$(document).ready(function () {
  new WOW().init();
  // $('.form-quis-visitor').hide();


  $('.btn-next').on('click', function(){
    $('.form-data-visitor').addClass('wow slideOutFade');
    $('.form-data-visitor').hide();
    $('.form-quis-visitor').addClass('wow slideInRight');
    $('.form-quis-visitor').show();
  });

  $('button.btn-quis').on('click', function(e){
    e.preventDefault();
    $(this).parents().closest('span').text($(this).text());
    $(this).removeClass('btn-warning');
    $(this).addClass('btn-dark');
    console.log($(this).text());

  });

  function next() {
    $('.form-box').addClass('wow fadeOut');
    $('.form-box').remove();
    medical();
  }

  function medical() {
    var page = '<div class="form-quis-visitor wow fadeInDown" data-wow-delay="1s">';
      page += '<h2>Medical Check Up</h2>';
        page += '<div class="gejala">';
          page += '<ul class="list-group list-group-flush">';
            page += '<li class="list-group-item">';
              page += '<div class="col-sm-12 row">';
                page += '<div class="col-sm-8">';
                  page += '<p>Apakah anda mengalami <u>DEMAM</u></p>';
                  page += '<p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-demam"></span></p>';
                page += '</div>';
                page += '<div class="row col-sm-4">';
                  page += '<div class="btn-tools">';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-demam-yes">Ya</button>';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-demam-yes">Tidak</button>';
                  page += '</div>';
                page += '</div>';
              page += '</div>';
            page += '</li>';
            page += '<li class="list-group-item">';
              page += '<div class="col-sm-12 row">';
                page += '<div class="col-sm-8">';
                  page += '<p>Apakah anda Sedang <u>BATUK</u></p>';
                  page += '<p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-batuk"></span></p>';
                page += '</div>';
                page += '<div class="col-sm-4 row">';
                  page += '<div class="btn-tools">';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-batuk-yes">Ya</button>';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-bauk-no">Tidak</button>';
                  page += '</div>';
                page += '</div>';
              page += '</div>';
            page += '</li>';
            page += '<li class="list-group-item">';
              page += '<div class="col-sm-12 row">';
                page += '<div class="col-sm-8">';
                  page += 'p>Apakah anda mengalami <u>PILEK</u></p>';
                  page += '<p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-pilek"></span></p>';
                page += '</div>';
                page += '<div class="col-sm-4 row">';
                  page += '<div class="btn-tools float-right">';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-pilek-yes">Ya</button>';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-nyeri-no">Tidak</button>';
                  page += '</div>';
                page += '</div>';
              page += '</div>';
            page += '</li>';
            page += '<li class="list-group-item">';
              page += '<div class="col-sm-12 row">';
                page += '<div class="col-sm-8">';
                  page += '<p>Anda merasa <u>NYERI DI TENGGOROKAN</u></p>';
                  page += '<p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-nyeri"></span></p>';
                page += '</div>';
                page += '<div class="col-sm-4 row">';
                  page += '<div class="btn-tools">';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-nyeri-yes">Ya</button>';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-nyeri-no">Tidak</button>';
                  page += '</div>';
                page += '</div>';
              page += '</div>';
            page += '</li>';
            page += '<li class="list-group-item">';
              page += '<div class="col-sm-12 row">';
                page += '<div class="col-sm-8">';
                  page += '<p>Apakah anda merasa <u>SESAK NAFAS</u></p >';
                  page += '<p class="p-bawah">hari ini atau 3(tiga) hari yang lalu ? <span id="jwb-sesak"></span></p>';
                page += '</div>';
                page += '<div class="col-sm-4 row">';
                  page += '<div class="btn-tools float-right">';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-sesak-yes">Ya</button>';
                    page += '<button class="btn btn-lg btn-warning btn-quis" id="btn-sesak-no">Tidak</button>';
                  page += '</div>';
                page += '</div>';
              page += '</div>';
            page += '</li>';
          page += '</ul>';
          page += '<button class="btn btn-danger" onclick="window.history.back()">Kembali</button>';
        page += '</div>';
      page += '</div>';

    $('section').append(page);
  }
});
</script>
@endpush