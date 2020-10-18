<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  @include('/partials/head')
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    @include('/partials/header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('/partials/sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content container-fluid">
          @yield('main')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('/partials/footer')
    <!-- Control Sidebar -->
    @include('/partials/sidebarDerecha')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->
  @include('partials/scripts')
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
       Both of these plugins are recommended to enhance the
       user experience. -->
</body>
</html>
