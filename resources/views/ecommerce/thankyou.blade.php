@extends('ecommerce/base')
@section('title')
  Bric à Brac: Gracias!
@endsection
@section('main')
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contacto</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="icon-check_circle display-3 text-success"></span>
          <h2 class="display-3 text-black">Muchas Gracias!</h2>
          <p class="lead mb-5">Tu orden se ha completado exitosamente.</p>
          <p><a href="/" class="btn btn-sm btn-primary">Volver a home.</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection
