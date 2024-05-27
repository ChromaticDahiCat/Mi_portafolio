<?php
    session_start();

    class conectar{
        protected $dbh;
        
        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhot;dbname=mi_portafolio","root","");
                return $conectar;
            } catch (Exception $e) {
                    print "¡Error BD!:" . $e->getMessage() . "<br/>";
                    die();
            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
        public static function ruta(){
            //QA
            return "http://localhost/parcial3Portafolio/";
        }
    }
?>