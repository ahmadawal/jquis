<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jembo Tanggap COVID-19</title><link rel="stylesheet" href="/plugins/signature_pad/signature-pad.css">
  <link rel="stylesheet" href="/css/app.css">
  <style>
  body {
    background-color: lightgray !important;
  }

  .wrapper {
    position: relative;
    width: 400px;
    height: 200px;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  img {
    position: absolute;
    left: 0;
    top: 0;
  }

  .signature-pad {
    position: absolute;
    left: 0;
    top: 0;
    width:400px;
    height:200px;
  }
  </style>
</head>
<body style="flex-direction: column;">
{{-- <section class="section parallax parallax-4" id="ttd">
  <div class="container overlay pt-4">
    <div class="col-lg-8 inner-bg wow fadeIn" data-wow-delay="0.5s" id="ttd-visitor">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="col-sm-12 row">
            <div class="col-sm-7">
              <div class="wrapper">
                <canvas class="signature-pad" id="signature-pad" width="400" height="200"></canvas>
              </div>
            </div>
            <div class="col-sm-5 row">
              <div class="btn choice">
                <button id="clear">Clear</button>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="btn-tools">
        <button class="btn btn-warning btn-next" onclick="window.history.back()">
          <i class="fa fa-angle-double-left" aria-hidden="true"></i>
          Kembali
        </button>
        <a href="#" class="btn btn-warning btn-next" style="float: right;">
          Selesai
          <i class="fa fa-save" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</section> --}}
<h1>
  Tanda Tangan Disini
</h1>
<div class="wrapper">
  <img src="https://preview.ibb.co/jnW4Qz/Grumpy_Cat_920x584.jpg" width=400 height=200 />
  <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
</div>
<div class="mt-4">
  <button class="btn btn-lg btn-primary" id="save">Simpan</button>
  <button class="btn btn-lg btn-primary" id="clear">Hapus</button>
</div>

<script src="/plugins/signature_pad/signature_pad.min.js"></script>
<script>
var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
  backgroundColor: 'rgba(255, 255, 255, 0)',
  penColor: 'rgb(0, 0, 0)'
});
var saveButton = document.getElementById('save');
var cancelButton = document.getElementById('clear');

saveButton.addEventListener('click', function (event) {
  var data = signaturePad.toDataURL('image/png');

// Send data to server instead...
  window.open(data);
});

cancelButton.addEventListener('click', function (event) {
  signaturePad.clear();
});
</script>
</body>
</html>