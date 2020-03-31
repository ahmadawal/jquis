@extends('layouts.master')
@section('title') PT. Jembo Cable Company, Tbk. @endsection
@section('content')
<div class="form-data-visitor wow slideInLeft w-100 p-3 row " data-wow-duration="2s" data-wow-delay="5s">
  <div class="col-lg-6">
    
  </div>
</div>
@endsection
@push('style')
<link rel="stylesheet" href="/css/cover.css">
<link rel="stylesheet" href="/plugins/wowjs/animate.css">
<link rel="stylesheet" href="/plugins/wowjs/site.min.css">
<style>
.form-data-visitor {
  width: 1366px;
  background: rgba(255, 255, 255, 0.16);
  border-radius: 10px;
  padding: 22px 13px;
  -webkit-box-shadow: 0px 0px 34px 0px rgba(255,255,255,0.34);
  -moz-box-shadow: 0px 0px 34px 0px rgba(255,255,255,0.34);
  box-shadow: 0px 0px 34px 0px rgba(255,255,255,0.34);
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

.btn-next {
  margin: 0 auto;
  font-size: 1.8em;
}

</style> 
@endpush
@push('script')
<script src="/plugins/wowjs/wow.min.js"></script>
<script>
$(document).ready(function () {
  new WOW().init();
});
</script>
@endpush