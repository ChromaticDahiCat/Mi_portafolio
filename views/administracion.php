<?php

define("BASE_URL","/parcial3Portafolio/views/");
require_once("../config/conexion.php");
if (isset($_SESSION["usu_id"])){
    include("./modulos/header.php");
    include("./modulos/menu.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Tabbed IFrames</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
</head>
<body>
    <h1 style="text-align: center;">Pagina en construcción</h1>
</body>

<?php
  }else{
   header("location:". conectar::ruta() ."views/404.php");
  }
?>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>