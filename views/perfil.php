<?php
define("BASE_URL","/parcial3Portafolio/views/");
require_once("../config/conexion.php");
if (isset($_SESSION["usu_id"])){
?>

<?php include("./modulos/menu.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>
<body>
<div class="content-wrapper">
    
    <div class="card card-solid">
        
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Estudiante
                        </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Dahian Catalina Nuñez Gutierrez</b></h2>
                                        <h4 class="lead"><b>dahian.nunez@uniminuto.edu.co</b></h4>
                                        <p class="text-muted text-sm"><b>About: </b> Estudiante de ingenieria de sistemas.</p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Girardot-Cundinamarca</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: 3114661605</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="../images/foto.png" alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }else{
   header("location:". conectar::ruta() ."views/404.php");
  }
?>