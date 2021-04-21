<?php
class ficheroJson {
    public $lista;

    public function __construct( $nombre,$objeto)
    {
        $this->lista = json_decode(file_get_contents($nombre),true)[$objeto];
    }

    public function nuevoAlumno() {
        return max(array_map("compara",$this->lista))+1;
    }
    public function grabaFichero($fichero,$elemento,$alumno) {
        if (array_search($alumno->id, array_column($this->lista, 'id'))){
            $this->lista[array_search($alumno->id, array_column($this->lista, 'id'))] = $alumno;
        } else{
            array_push($this->lista,$alumno);
        }
        $salida = '{"'.$elemento.'":'.json_encode($this->lista,JSON_UNESCAPED_UNICODE + JSON_PRETTY_PRINT).'}';
        file_put_contents($fichero,$salida);
        move_uploaded_file($_FILES['imagen_fichero']['tmp_name'],"./ficheros/imagenes/".$alumno->imagen);
    }
}
class Alumno {
    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $telefono;
    public $web;
    public $imagen;

    //Constructor
    public function __construct($id=null,$nombre=null,$apellidos=null,$email=null,$telefono=null,$web=null,$imagen=null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->web = $web;
        $this->imagen = $imagen;
    }
}

function compara($dato){
    return $dato["id"];
} 
?>