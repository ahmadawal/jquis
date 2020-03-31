<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/app.css">
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <style>
  html, body {
      background-color: #fff;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
  }

/* .overlay {
  background:
    linear-gradient(
      0deg, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)),
      url('/images/wallpaper.jpg');
  background-size: cover;
  height: 100%;
} */

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}
</style>

@stack('style')

</head>
{{-- <body class="text-center overlay text-white"> --}}
<body class="text-center text-white">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <div class="masthead-img">
        <img class="masthead-brand" src="/images/lg.png" width="30" height="30" alt="">
      </div>
      <h3 class="masthead-brand">  &nbsp; PT. Jembo Cable Company, Tbk.</h3>
      <nav class="nav nav-masthead justify-content-center">
        {{-- <a class="nav-link active" href="#">Home</a> --}}
        {{-- <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a> --}}
      </nav>
    </div>
  </header>
  <main role="main" class="inner cover">
    @yield('content')
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <span>Created, by IT Development Jembo &copy;2020.</span>
    </div>
  </footer>
</div>

<script src="/js/app.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
@stack('script')
</body>
</html>