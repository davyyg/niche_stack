<!DOCTYPE html>
<html>
<head>
  
  @include('layouts.header')

   <style>
    th, td {
        padding: 10px;
        text-align: left;
    }

    textarea {
      width: 400px;
      height: 90px;
    }
    </style>  


    @yield('additional_head_script')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Niche</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Niche Stack</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar6.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php //echo Session::get('name'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      @include('layouts.navigation')

    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- ChartJS -->
<script src="{{ url('bower_components/chart.js/Chart.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
      CKEDITOR.replace( 'description' );
      CKEDITOR.replace( 'requirements' );
      CKEDITOR.replace( 'qualification' );
      CKEDITOR.replace( 'background');
</script>

@yield('additional_script')

</body>
</html>
