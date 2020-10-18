@extends('ecommerce/base')
@section('title')
  Bric à Brac: Carrito
@endsection
@section('main')
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Carrito</strong></div>
      </div>
    </div>
  </div>
  @php
    $contador = 0;
  @endphp

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Imagen</th>
                  <th class="product-name">Producto</th>
                  <th class="product-price">Precio</th>
                  <th class="product-quantity">Cantidad</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Quitar</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($productos as $producto)
                  <tr>
                    <td class="product-thumbnail">
                      <img src="/images/{{$producto->foto}}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$producto->nombre}}</h2>
                    </td>
                    <td>${{$producto->precio}}</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      </div>

                    </td>
                    <td>${{$producto->precio}}</td>
                    <td><a href="/carrito/eliminar/{{$producto->id}}" class="btn btn-primary btn-sm">X</a></td>
                    @php
                      $contador += $producto->precio;
                    @endphp
                  </tr>
                @empty
                  <tr>
                    No hay productos en el carrito
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-6">
              <a href="/"><button class="btn btn-outline-primary btn-sm btn-block">Continuar comprando</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Total Carrito</h3>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">${{$contador}}.00</strong>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='/checkout'">Proceder a pagar</button>
                </div>
                {{-- <form action="/procesar-pago" method="POST">
                  <script
                    src="https://www.mercadopago.com.ar/integrations/v1/web-tokenize-checkout.js"
                    data-public-key="TEST-79455ad3-baa0-4257-b2b9-e8aca6d456d4"
                    data-transaction-amount="{{$contador}}.00">
                  </script>
                </form> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
