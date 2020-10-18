@extends('ecommerce/base')
@section('title')
  Bric à Brac: Tienda Online
@endsection
@section('main')
  <?php
    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
  ?>
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$mueble->nombre}}</strong></div>
      </div>
    </div>
  </div>
  @isset($exito)
    <div class="alert alert-success" role="alert">
      {{$exito}}
    </div>
  @endisset
  @isset($error)
    <div class="alert alert-danger" role="alert">
      {{$error}}
    </div>
  @endisset
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/images/{{$mueble->foto}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h2 class="text-black">{{$mueble->nombre}}</h2>
          <p>{!!$mueble->descripcion!!}</p>
          <p><strong class="text-primary h4">${{$mueble->precio}}</strong></p>
          <div class="mb-5">
            <p>Stock:</p>
            <div class="input-group mb-3" style="max-width: 50px;">
            {{-- <div class="input-group-prepend">
              <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div> --}}
            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            {{-- <div class="input-group-append">
              <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div> --}}
          </div>

          </div>
          <p><a href="/agregar/{{$mueble->id}}" class="buy-now btn btn-sm btn-primary">Agregar al carrito</a></p>

        </div>
      </div>
    </div>
  </div>

  <div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Muebles mas recientes</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="nonloop-block-3 owl-carousel">
            @foreach ($recientes as $reciente)
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="/images/{{$reciente->foto}}" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="/mueble/{{$reciente->id}}">{{$reciente->nombre}}</a></h3>
                    <p class="mb-0">{{$reciente->categoria->nombre}}</p>
                    <p class="text-primary font-weight-bold">${{$reciente->precio}}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
