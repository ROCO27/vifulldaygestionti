@extends('layouts.layout')

@section('styles')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.min.css"> --}}

@endsection

@section('SectionRegisterForm')

<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">VI Full Day</a></li>
        <li class="active">Participantes</li>
      </ul>
      <h3 class="breadcrumbs-custom-title">Lista Participantes</h3>
    </div>
</section>

<div id="app">

    <lista-participantes></lista-participantes>
</div>
@endsection

@section('scripts')
<script src="/js/app.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.all.js"></script> --}}
{{-- <script>
    var app = new Vue({
      el: '#app',
      data: {
        message: 'Hello Vue!'
      }
    })
</script> --}}
@endsection
