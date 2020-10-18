<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('images/admin.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        {{-- <p>{{Auth::user()->first_name." ".Auth::user()->last_name}}</p> --}}
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    {{-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form> --}}
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="/home"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
      {{-- <li><a href="#"><i class="fa fa-file"></i> <span>Controlar Archivos</span></a></li> --}}
      <li class="treeview">
        <a href="#"><i class="fa fa-plus"></i> <span>Agregar</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/agregarFarmacia">Farmacia</a></li>
          <li><a href="/agregarPeriodo">Período</a></li>
        </ul>
      </li>
      <li><a href="/subir"><i class="fa fa-upload"></i> <span>Subir Archivos</span></a></li>
      <li><a href="#"><i class="fa fa-power-off"></i> <span>Desconectarse</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
