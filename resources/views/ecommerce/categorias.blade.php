@extends('ecommerce/base')
@section('title')
  Bric à Brac: Buscar por Categorias
@endsection
@section('main')
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Comprar {{$categoriaElegida->nombre}}</strong></div>
      </div>
    </div>
  </div>
  <div class="site-section">
    <div class="container">

      <div class="row mb-5">
        <div class="col-md-9 order-2">

          <div class="row">
            <div class="col-md-12 mb-5">
              <div class="float-md-left mb-4"><h2 class="text-black h5">{{$categoriaElegida->nombre}}</h2></div>
              {{-- <div class="d-flex">
                <div class="dropdown mr-1 ml-md-auto">
                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Latest
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item" href="#">Men</a>
                    <a class="dropdown-item" href="#">Women</a>
                    <a class="dropdown-item" href="#">Children</a>
                  </div>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#">Relevance</a>
                    <a class="dropdown-item" href="#">Name, A to Z</a>
                    <a class="dropdown-item" href="#">Name, Z to A</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Price, low to high</a>
                    <a class="dropdown-item" href="#">Price, high to low</a>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
          <div class="row mb-5">
            @foreach ($muebles as $mueble)
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="/mueble/{{$mueble->id}}"><img src="/images/{{$mueble->foto}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="/mueble/{{$mueble->id}}">{{$mueble->nombre}}</a></h3>
                    <p class="mb-0">{!!str_limit($mueble->descripcion, 50)!!}</p>
                    <p class="text-primary font-weight-bold">{{$mueble->precio}}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          {{ $muebles->links() }}
        </div>

        <div class="col-md-3 order-1 mb-5 mb-md-0">
          <div class="border p-4 rounded mb-4">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
            <ul class="list-unstyled mb-0">
              @foreach ($categorias as $categoria)
                <li class="mb-1"><a href="/categoria/{{$categoria->id}}" class="d-flex"><span>{{$categoria->nombre}}</span></a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
