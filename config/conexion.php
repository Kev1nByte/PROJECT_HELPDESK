<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //Local
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdesk","root","");
                //Produccion
                //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdesk","kevin","byte2024");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			return "http://localhost/Project_Helpdesk/";
            //Produccion
            //return "http://helpdesk.kevin-byte.com/";
		}

    }
?>