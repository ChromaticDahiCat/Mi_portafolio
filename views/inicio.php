<?php
define("BASE URL","/parcial3Portafolio/views/");
require_once("../config/conexion.php");
if (isset($_SESSION["usu_id"])){
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Tabbed IFrames</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("./modulos/header.php");?>
  <!-- /.n avbar -->

  <!-- Main Sidebar Container -->
  <?php include("./modulos/menu.php");?>
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-3 col-6">

          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">

          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">

          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">

          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

    
  </div>
  <!-- /.content-wrapper -->
  <?php include("./modulos/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

<?php
  }else{
   header("location:". conectar::ruta() ."/parcial3Portafolio/views/404.php");
  }
?>