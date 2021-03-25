<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <base href="{{asset('')}}">
  <title>@yield('title_page')</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="public/backEnd/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/backEnd/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="public/backEnd/dist/font/css.css" rel="stylesheet">
   <!-- Toastr Css -->
  <link rel="stylesheet" href="public/backEnd/plugins/toastr/toastr.min.css">
  {{-- Datatables Css --}}
  <link rel="stylesheet" href="public/backEnd/plugins/datatables/datatables.min.css">
  {{-- Style me Css --}}
  <link rel="stylesheet" href="public/backEnd/style.css">
    @yield('css')

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item f-25px">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-id-card-alt" style="border: solid 1px #00000094;padding: 3px;border-radius: 19%;"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="public/backEnd/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">
            Eliah Admin
        </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">

          </div>
          <div class="info">
            <a href="" class="d-block">...</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header pl-3">Statistical</li>
              <?php $menu = config('menu'); ?>
          @foreach($menu as $m)
            <li class="nav-item has-treeview">
              <a href="{{ route($m['route'])}}" class="nav-link {{ Route::is($m['route']) ? ' active' : '' }}">
                  <i class="nav-icon {{$m['icon']}}"></i>
                  <p>
                      {{$m['label']}}
                      @if(isset($m['items']))
                      <i class="right fas fa-angle-left"></i>
                      @endif
                  </p>
              </a>
                @if(isset($m['items']))
              <ul class="nav nav-treeview">
                  @foreach($m['items'] as $item)
                      <li class="nav-item">
                          <a href="{{route($item['route'])}}" class="nav-link {{ Route::is($item['route']) ? ' active' : '' }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p>{{$item['label']}}</p>
                          </a>
                      </li>
                  @endforeach
              </ul>
                @endif
          </li>
          @endforeach
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">@yield('title_form')</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">@yield('title_form')</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.3
      </div>
    </footer>
  </div>
  <script src="public/backEnd/plugins/jquery/jquery.min.js"></script>
  <script src="public/backEnd/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/backEnd/dist/js/adminlte.js"></script>
  <script src="public/backEnd/plugins/toastr/toastr.min.js"></script>
  @yield('js')
  </body>
</html>
