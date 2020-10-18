<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Mueble;
class EcommerceController extends Controller
{
  public function index()
  {
    $categorias = Categoria::all();
    $muebles = Mueble::latest()->limit(5)->get();
    return view('/ecommerce/index', ['categorias' => $categorias, 'muebles' => $muebles]);
  }
  public function mueble($id)
  {
    $mueble = Mueble::find($id);
    $categorias = Categoria::all();
    $recientes = Mueble::latest()->limit(5)->get();
    return view('/ecommerce/mueble', ['mueble' => $mueble, 'recientes' => $recientes, 'categorias' => $categorias]);
  }
  public function categorias($id)
  {
    $muebles = Mueble::where('categorias_id', $id)->where('stock', '>', '0')->paginate(20);
    $categorias = Categoria::all();
    $categoriaElegida = Categoria::find($id);
    return view('/ecommerce/categorias', ['muebles' => $muebles , 'categorias' => $categorias, 'categoriaElegida' => $categoriaElegida]);
  }
  public function vendidos($id)
  {
    $muebles = Mueble::where('categorias_id', $id)->where('stock', '=', '0')->paginate(20);
    $categorias = Categoria::all();
    $categoriaElegida = Categoria::find($id);
    return view('/ecommerce/categorias', ['muebles' => $muebles , 'categorias' => $categorias, 'categoriaElegida' => $categoriaElegida]);
  }
  public function agregar($id)
  {
    $mueble = Mueble::find($id);
    if (session()->has('productos')) {
      $productos = session('productos');
      if (in_array($mueble, $productos)) {
        $categorias = Categoria::all();
        $recientes = Mueble::latest()->limit(5)->get();
        return view('/ecommerce/mueble', ['mueble' => $mueble, 'recientes' => $recientes, 'categorias' => $categorias, 'error' => 'El producto ya se encuentra en el carrito.' ]);
      } else {
        session()->push('productos', $mueble);
        $categorias = Categoria::all();
        $recientes = Mueble::latest()->limit(5)->get();
        return view('/ecommerce/mueble', ['mueble' => $mueble, 'recientes' => $recientes, 'categorias' => $categorias, 'exito' => 'El producto se agregó con éxito.' ]);
      }
    } else {
      session()->push('productos', $mueble);
      $categorias = Categoria::all();
      $recientes = Mueble::latest()->limit(5)->get();
      return view('/ecommerce/mueble', ['mueble' => $mueble, 'recientes' => $recientes, 'categorias' => $categorias, 'exito' => 'El producto se agregó con éxito.' ]);
    }
  }
  public function carrito()
  {
    // session()->forget('productos');
    if (!empty(session('productos'))) {
      $productos = session('productos');
    }else {
      $productos = [];
    }
    $categorias = Categoria::all();
    return view('/ecommerce/carrito', ['categorias' => $categorias, 'productos' => $productos]);
  }
  public function pago(Request $request)
  {
    $categorias = Categoria::all();
    $productos = session('productos');
    $token = $request->token;
    $payment_method_id = $request->payment_method_id;
    $installments = $request->installments;
    $issuer_id = $request->issuer_id;
    // require_once 'vendor/autoload.php';
    // require_once __DIR__  . '/vendor/autoload.php';

    \MercadoPago\SDK::setAccessToken("TEST-6915038648323600-022513-ce4f9d9d49a95aa89a8777759b685d9a-55077889");
    //...
    $payment = new \MercadoPago\Payment();
    $payment->transaction_amount = session('total');
    $payment->token = $token;
    $payment->description = "Muebles Bric á Brac";
    $payment->installments = $installments;
    $payment->payment_method_id = $payment_method_id;
    $payment->issuer_id = $issuer_id;
    $datos = session('datos');
    $payment->payer = array(
    "email" => $datos[2]
    );
    // Guarda y postea el pago
    $payment->save();
    //...
    if ($payment->status == 'approved') {
      session()->forget('datos');
      session()->forget('total');
      foreach ($productos as $producto) {
        $mueble = Mueble::find($producto->id);
        $mueble->stock -= 1;
        $mueble->save();
      }
      session()->forget('productos');
      return view('/ecommerce/thankyou', ['categorias' => $categorias, 'productos' => []]);
    }else {
      return view('/ecommerce/reintentar', ['categorias' => $categorias, 'productos' => $productos]);
    }
    // Imprime el estado del pago
    // return view('/ecommerce/thankyou', );
    // echo $payment->status;
    //...
  }
  public function checkout()
  {
    if (!empty(session('productos'))) {
      $productos = session('productos');
    }else {
      $productos = [];
    }
    $categorias = Categoria::all();
    return view('/ecommerce/checkout', ['categorias' => $categorias, 'productos' => $productos]);
  }
  public function checkoutDatos(Request $request)
  {
    session()->forget('datos');
    session()->push('datos', $request->c_fname);
    session()->push('datos', $request->c_lname);
    session()->push('datos', $request->c_email_address);
    session()->push('datos', $request->c_phone);
    $categorias = Categoria::all();
    $productos = session('productos');
    return view('/ecommerce/pagar', ['categorias' => $categorias, 'productos' => $productos]);
  }
  public function eliminarCarrito($id)
  {
    $productos = session('productos');
    session()->forget('productos');
    foreach ($productos as $producto ) {
      if ($producto->id != $id) {
        session()->push('productos', $producto);
      }
    }
    $categorias = Categoria::all();
    if (!empty(session('productos'))) {
      $productos = session('productos');
    }else {
      $productos = [];
    }
    return view('/ecommerce/carrito', ['categorias' => $categorias, 'productos' => $productos]);
  }
}
