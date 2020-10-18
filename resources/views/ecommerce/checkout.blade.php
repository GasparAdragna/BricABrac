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
        <div class="col-md-6 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">Datos de Facturacion</h2>
          <div class="p-3 p-lg-5 border">
            {{-- <div class="form-group">
              <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
              <select id="c_country" class="form-control">
                <option value="1">Select a country</option>
                <option value="2">bangladesh</option>
                <option value="3">Algeria</option>
                <option value="4">Afghanistan</option>
                <option value="5">Ghana</option>
                <option value="6">Albania</option>
                <option value="7">Bahrain</option>
                <option value="8">Colombia</option>
                <option value="9">Dominican Republic</option>
              </select>
            </div> --}}
            <form class="" method="post">
              {{ csrf_field() }}
            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" required name="c_fname">
              </div>
              <div class="col-md-6">
                <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_lname" required name="c_lname">
              </div>
            </div>

            {{-- <div class="form-group row">
              <div class="col-md-12">
                <label for="c_companyname" class="text-black">Company Name </label>
                <input type="text" class="form-control" id="c_companyname" name="c_companyname">
              </div>
            </div> --}}

            {{-- <div class="form-group row">
              <div class="col-md-12">
                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
              </div>
            </div> --}}

            {{-- <div class="form-group">
              <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
            </div> --}}

            {{-- <div class="form-group row">
              <div class="col-md-6">
                <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_state_country" name="c_state_country">
              </div>
              <div class="col-md-6">
                <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
              </div>
            </div> --}}

            <div class="form-group row mb-5">
              <div class="col-md-6">
                <label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_email_address" required name="c_email_address">
              </div>
              <div class="col-md-6">
                <label for="c_phone" class="text-black">Celular <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_phone" required name="c_phone" placeholder="Numero de Celular">
              </div>
            </div>

            {{-- <div class="form-group">
              <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
              <div class="collapse" id="create_an_account">
                <div class="py-2">
                  <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                  <div class="form-group">
                    <label for="c_account_password" class="text-black">Account Password</label>
                    <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                  </div>
                </div>
              </div>
            </div> --}}


            {{-- <div class="form-group">
              <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
              <div class="collapse" id="ship_different_address">
                <div class="py-2">

                  <div class="form-group">
                    <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
                    <select id="c_diff_country" class="form-control">
                      <option value="1">Select a country</option>
                      <option value="2">bangladesh</option>
                      <option value="3">Algeria</option>
                      <option value="4">Afghanistan</option>
                      <option value="5">Ghana</option>
                      <option value="6">Albania</option>
                      <option value="7">Bahrain</option>
                      <option value="8">Colombia</option>
                      <option value="9">Dominican Republic</option>
                    </select>
                  </div>


                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                    </div>
                    <div class="col-md-6">
                      <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_diff_companyname" class="text-black">Company Name </label>
                      <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                    </div>
                    <div class="col-md-6">
                      <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <div class="col-md-6">
                      <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                    </div>
                    <div class="col-md-6">
                      <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
                    </div>
                  </div>

                </div>

              </div>
            </div> --}}

            {{-- <div class="form-group">
              <label for="c_order_notes" class="text-black">Comentario</label>
              <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
            </div> --}}
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg py-3 btn-block">Continuar a pagar</button>
            </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">

          {{-- <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Medios de Pago</h2>
              <div class="p-3 p-lg-5 border">
                <img src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/120X240.jpg" title="MercadoPago - Medios de pago" alt="MercadoPago - Medios de pago" width="120" height="240"/>
                <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                <div class="input-group w-75">
                  <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                  </div>
                </div>

              </div>
            </div>
          </div> --}}
          {{-- @php
            $contador = 0;
          @endphp
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
                    @endforelse --}}
                    {{-- <tr>
                      <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                      <td class="text-black">$350.00</td>
                    </tr> --}}
                    {{-- <tr>
                      <td class="text-black font-weight-bold"><strong>Total Orden</strong></td>
                      <td class="text-black font-weight-bold"><strong>${{$contador}}.00</strong></td>
                    </tr>
                  </tbody>
                </table> --}}

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
                {{-- @if (!empty($productos))
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
          </div> --}}

        </div>
      </div>
      <!-- </form> -->
    </div>
  </div>
@endsection