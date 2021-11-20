<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SheShop</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons --> 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('public')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="{{url('public')}}/assets/js/jquery.js" type="text/javascript"></script>
  <script src="{{url('public')}}/assets/js/bootstrap.js" type="text/javascript"></script>
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  @stack('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('Admin.template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Admin.template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('Admin.template.utils.notif')
    <!-- Content Header (Page header) -->
    <div class="container">
    @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('Admin.template.footer')

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('public')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('public')}}/dist/js/demo.js"></script>
<script src="{{url('/public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('/public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('/public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="{url('public')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{url('public')}}/dist/js/demo.js"></script>
@stack('script')
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
        $(".table-datatable").DataTable();
    </script>
    
</body>
</html>
