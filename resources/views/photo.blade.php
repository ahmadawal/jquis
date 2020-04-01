<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jembo Tanggap COVID-19</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .photo-container {
      text-align: center;
      display: flex;
      width: 660px;
      margin: 0 auto;
    }

    .video-wrap, .canvas {
      width: 325px;
      height: auto;
    }
  </style>
</head>
<body>
  <div class="container  mt-5">
    <h1 class="text-center">Silahkan ambil gambar</h1>
    <span id="errorMsg"></span>
    <div class="photo-container row">
      
      <!-- Stream video via webcam -->
      <div class="video-wrap">
        <video id="video" playsinline autoplay></video>
        <div class="controller text-center">
          <button class="btn btn-warning btn-lg" id="snap">
            Photo
            <i class="fa fa-camera"></i>
          </button>
        </div>
      </div>

      <div class="canvas">
        <!-- Webcam video snapshot -->
        <canvas id="canvas" width="320" height="410"></canvas>
        <div class="text-center">
          <input type="hidden" name="id" id="input-id" value="{{ session('id') }}">
          <button class="btn btn-primary btn-lg" id="btn-simpan">Simpan <i class="fa fa-rocket"></i></button>
        </div>
      </div>
    </div>
    <!-- Trigger canvas web API -->
    
  </div>
<script src="{{ asset('js/app.js') }}"></script>
<script>

</script>
<script>
  'use strict';

  const video = document.getElementById('video');
  const canvas = document.getElementById('canvas');
  const snap = document.getElementById("snap");
  const errorMsgElement = document.querySelector('span#errorMsg');

  const constraints = {
    audio: true,
    video: {
      width: 320, height: 410
    }
  };

  // Access webcam
  async function init() {
    try {
      const stream = await navigator.mediaDevices.getUserMedia(constraints);
      handleSuccess(stream);
    } catch (e) {
      errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
    }
  }

  // Success
  function handleSuccess(stream) {
    window.stream = stream;
    video.srcObject = stream;
  }

  // Load init
  init();

  // Draw image
  var context = canvas.getContext('2d');
  snap.addEventListener("click", function() {
    context.drawImage(video, 0, 0, 320, 410);
  });

  // context.translate(canvas.width/2,canvas.height/2);

  // context.scale(1, 1);
  

  
$(function () {
  // $.ajaxSetup({
  //   headers: {
  //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   }
  // });

  $('#btn-simpan').click(function () {
    var dataURL = canvas.toDataURL('image/png');
    saveImg();
  });

  function saveImg() {
    var dataURL = canvas.toDataURL('image/png');
    $.ajax({
      type: "POST",
      url: "{{ route('visitor.img') }}",
      data: {
        'base64data': dataURL,
        'id': $('#input-id').val(),
        '_token': '{{ csrf_token() }}',
      },
      success: function (response) {
        window.location.href = '{{ route("home") }}';
      }
    });
  }
});
</script>
</body>
</html>