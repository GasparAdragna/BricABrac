<!DOCTYPE html>
<html lang="en">
  @include('partialsEcommerce/head')
  <body>
  <div class="site-wrap">
    @include('partialsEcommerce/header')
    @yield('main')
    @include('partialsEcommerce/footer')
  </div>
  @include('partialsEcommerce/scripts')
  </body>
</html>
