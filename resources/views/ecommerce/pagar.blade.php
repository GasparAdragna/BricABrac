@extends('ecommerce/base')
@section('title')
  Bric à Brac: Checkout
@endsection
@section('main')
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="/carrito">Carrito</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      {{-- <div class="row mb-5">
        <div class="col-md-12">
          <div class="border p-4 rounded" role="alert">
            Returning customer? <a href="#">Click here</a> to login
          </div>
        </div>
      </div> --}}
      <div class="row">
          @php
            $contador = 0;
          @endphp
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Tu Orden</h2>
              <div class="p-3 p-lg-5 border">
                <table class="table site-block-order-table mb-5">
                  <thead>
                    <th>Producto</th>
                    <th>Total</th>
                  </thead>
                  <tbody>
                    @forelse ($productos as $producto)
                      <tr>
                        <td>{{$producto->nombre}}<strong class="mx-2">x</strong> 1</td>
                        <td>${{$producto->precio}}</td>
                      </tr>
                      @php
                        $contador += $producto->precio;
                      @endphp
                    @empty
                      No hay productos en el carrito
                    @endforelse
                    {{-- <tr>
                      <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                      <td class="text-black">$350.00</td>
                    </tr> --}}
                    <tr>
                      <td class="text-black font-weight-bold"><strong>Total Orden</strong></td>
                      <td class="text-black font-weight-bold"><strong>${{$contador}}.00</strong></td>
                    </tr>
                  </tbody>
                </table>

                {{-- <div class="border p-3 mb-3">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                  <div class="collapse" id="collapsebank">
                    <div class="py-2">
                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 mb-3">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                  <div class="collapse" id="collapsecheque">
                    <div class="py-2">
                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 mb-5">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                  <div class="collapse" id="collapsepaypal">
                    <div class="py-2">
                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                    </div>
                  </div>
                </div> --}}

                {{-- <div class="form-group">
                  <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.html'"></button>
                </div> --}}
                @if (!empty($productos))
                  @php
                    session(['total' => $contador]);
                  @endphp
                  <form action="/procesar-pago" method="POST">
                    <script
                      src="https://www.mercadopago.com.ar/integrations/v1/web-tokenize-checkout.js"
                      data-public-key="TEST-79455ad3-baa0-4257-b2b9-e8aca6d456d4"
                      data-transaction-amount="{{$contador}}.00">
                    </script>
                  </form>
                @endif
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Medios de Pago</h2>
              <div class="p-3 p-lg-5 border">
                <img src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/120X240.jpg" title="MercadoPago - Medios de pago" alt="MercadoPago - Medios de pago" width="120" height="240"/>
                {{-- <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label> --}}
                {{-- <div class="input-group w-75">
                  <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                  </div>
                </div> --}}

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- </form> -->
    </div>
  </div>
@endsection
