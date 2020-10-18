@extends('ecommerce/base')
@section('title')
  Bric à Brac: Oops algo salio mal!
@endsection
@section('main')
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contacto</strong></div>
      </div>
    </div>
  </div>
  @php
  $contador = 0;
    foreach ($producto  as $producto) {
      $contador += $producto->precio;
    }
  @endphp
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="icon-check_circle display-3 text-success"></span>
          <h2 class="display-3 text-black">Algo salió mal.</h2>
          <p class="lead mb-5">Ha ocurrido un error con el pago. Por favor vuelve a intentarlo. Si el error persiste, intentalo de nuevo mas adelante o ponte en contacto con nosotros.</p>
          <form action="/procesar-pago" method="POST">
            <script
              src="https://www.mercadopago.com.ar/integrations/v1/web-tokenize-checkout.js"
              data-public-key="TEST-79455ad3-baa0-4257-b2b9-e8aca6d456d4"
              data-transaction-amount="{{$contador}}.00"
              data-button-label="Reintentar"> <!-- Texto del botón -->
            </script>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
