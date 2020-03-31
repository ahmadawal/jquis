<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jembo Tanggap COVID-19</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('plugins/wowjs/css/libs/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/jquery-confirm/dist/jquery-confirm.min.css') }}">
  {{-- <link rel="stylesheet" href="/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('css/quis.css') }}">
  @stack('style')
</head>
<body style="margin: 0 auto;">
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container text-center col-sm-12">
    <a class="navbar-brand text-center" style="margin: 0 auto; font-size: 1.5rem; position: relative; float: center;" href="javascript: void(0);">
      JEMBO TANGGAP COVID-19
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
  </div>
</nav> --}}
@yield('content')
  
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('plugins/wowjs/dist/wow.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-confirm/dist/jquery-confirm.min.js') }}"></script>
<script src="{{ asset('plugins/inputmask/dist/jquery.inputmask.min.js') }}"></script>
{{-- <script src="/plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js"></script> --}}
<script src="{{ asset('js/quis.js') }}"></script>
<script>
$(function () {
  new WOW().init();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
});
</script>
@stack('script')
</body>
</html>