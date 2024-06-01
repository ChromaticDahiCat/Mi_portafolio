<?php
define("BASE_URL","/parcial3Portafolio/views/");
require_once("../config/conexion.php");
if (isset($_SESSION["usu_id"])){
  
  class Experiencia extends Conectar {
    public function getAllExperiencia() {
        $conectar = $this->conexion();
        $this->set_names();
        $sql = "SELECT work_titulo, work_descripcion, work_fecha FROM trabajos_realizados";
        $stmt = $conectar->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$experiencia = new Experiencia();
$data = $experiencia->getAllExperiencia();
?>

<!-- archivo que contiene modal se requiere antes de la la linea en que requieren archivojs.php-->
<?php require_once("./modulos/mntModalsocialmedia.php"); ?>
<?php require_once("modulos/Js.php"); ?>
<script type="text/javascript" src="js/socialMedia.js"></script>


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


<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

  <?php include("./modulos/header.php");?>
  <?php include("./modulos/menu.php");?>

  <div class="content-wrapper" style="min-height: 1724.44px;">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trabajos Realizados</font></font></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acciones</font></font></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Colapsar">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Eliminar">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-outline-primary">Crear</button>
            </div>
            <div class="col-sm-6">
              <button style="text-aling:left" type="button" class="btn btn-outline-success">Cargar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datos</font></font></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Colapsar">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Eliminar">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <table id="socialMedia_data" class="table display responsive wrap">
        <thead>
            <tr>
            <th class="wd-15p">Titulo</th>
            <th class="wd-15p">Descripcion</th>
            <th class="wd-10p">Año</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
        // Display table data
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['work_titulo']) . "</td>";
            echo "<td>" . htmlspecialchars($row['work_descripcion']) . "</td>";
            echo "<td>" . htmlspecialchars($row['work_fecha']) . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>
        </div>
      </div>

    </section>

  </div>

  <?php include("./modulos/footer.php");?>

</div>


<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="../dist/js/adminlte.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>

<?php require_once("views/modulos/js.php"); ?>
<script type="text/javascript" src="js/socialMedia.js"></script>



<?php
  }else{
   header("location:". conectar::ruta() ."views/404.php");
  }
?>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script