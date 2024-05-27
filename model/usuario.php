<?php
    class Usuario extends Conectar{
        public function login(){
            $conectar = parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["correo"];
                $password = $_POST["passwd"];
                if(empty($correo) and empty($password)){
                    header("Location:".Conectar::ruta()."views/login.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE usu_correo=? and usu_pass=? and est=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindParam(1,$correo);
                    $stmt->bindParam(2,$password);
                    $stmt->execute();
                    $resultado = $stmt->fetch();

                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["nombre"]=$resultado["usu_nom"];
                        $_SESSION["ape_paterno"]=$resultado["usu_apep"];
                        $_SESSION["correo"]=$resultado["usu_correo"];
                        header("Location:".Conectar::ruta()."views/inicio.php");
                        exit();
                    }else{
                        header("Location:".Conectar::ruta()."views/login.php?m=1");
                        exit();
                    }
                }
            }
        }
    }