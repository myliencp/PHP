<?php

    class coches {
        
        public $lista;

        public function __construct() {
            $this->lista = json_decode(file_get_contents('coches.json'),true)["coches"];
        }

        public function __toString() {
            $texto="";
          
            foreach ($this->lista as $coche) {
                $objeto =(object)($coche);
                $texto .= $objeto->id.",".$objeto->marca.",".$objeto->año.",".$objeto->kilometraje.",".$objeto->combustible.",".$objeto->precio.",".$objeto->fichero;
            }
            return $texto;
        }

        public function cocheporid($id) {
            foreach ($this->lista as $elemento) {
                if ($elemento['id'] == $id) {
                    $coche = new coche($elemento['id'],$elemento['marca'],$elemento['año'],$elemento['kilometraje'],$elemento['combustible'],$elemento['precio'],$elemento['fichero']);
                    return $coche;
                } 
            }
            return null;
        }

    }

    class coche {

        public $id;
        public $marca;
        public $año;
        public $kilometraje;
        public $combustible;
        public $precio;
        public $fichero;

        //Constructor
        public function __construct($id=null,$marca=null,$año=null,$kilometraje=null,$combustible=null,$precio=null,$fichero=null) {
            $this->id = $id;
            $this->marca = $marca;
            $this->año = $año;
            $this->kilometraje = $kilometraje;
            $this->combustible = $combustible;
            $this->precio = $precio;
            $this->fichero = $fichero;
        }

    }

?>