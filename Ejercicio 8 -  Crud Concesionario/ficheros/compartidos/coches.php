<?php
class ficheroJson {
    public $lista;
    //Carga en la variable lista todo el contenido del fichero Json
    public function __construct( $nombre,$objeto)
    {
        $this->lista = json_decode(file_get_contents($nombre),true)[$objeto];
    }
    // __construct:PHP permite a los desarrolladores declarar métodos constructores para las clases. Aquellas que tengan un método constructor lo invocarán en cada nuevo objeto creado, lo que lo hace idóneo para cualquier inicialización que el objeto pueda necesitar antes de ser usado.
    // json_decode:Convierte un string codificado en JSON a una variable de PHP.
    // file_get_contents:Transmite un fichero completo a una cadena

    public function nuevoRegistro() {
        return max(array_map("compara",$this->lista))+1;
    }
    // array_map:Aplica la retrollamada a los elementos de los arrays dados

    public function grabaFichero($fichero,$elemento,$coche) {
        if (gettype(array_search($coche->id, array_column($this->lista, 'id'))) != "boolean"){
            $this->lista[array_search($coche->id, array_column($this->lista, 'id'))] = $coche;
        } else{
            array_push($this->lista,$coche);
        }
        $salida = '{"'.$elemento.'":'.json_encode($this->lista,JSON_UNESCAPED_UNICODE + JSON_PRETTY_PRINT).'}';
        file_put_contents($fichero,$salida);
        move_uploaded_file($_FILES['imagen_fichero']['tmp_name'],"./ficheros/imagenes/".$coche->imagen);
    }
    // array_push : Inserta uno o más elementos al final de un array
    // json_encode: Retorna la representación JSON del valor dado
    // file_put_contents:  Escribir datos en un fichero
    // move_uploaded_file: Mueve un archivo subido a una nueva ubicación

    public function borraRegistro($fichero,$elemento,$id,$imagen) {
        $respuesta = array_search($id,array_column($this->lista,'id'));
        if (gettype($respuesta) != "boolean"){
           array_splice($this->lista,$respuesta,1);
        } 
        $salida = '{"'.$elemento.'":'.json_encode($this->lista,JSON_UNESCAPED_UNICODE + JSON_PRETTY_PRINT).'}';
        file_put_contents($fichero,$salida);
        if ($imagen != "notiene.jpg"){
            unlink("./ficheros/imagenes/".$imagen);//elimina la foto
        }
    }
    
}
class Coche {
    public $id;
    public $marca;
    public $año;
    public $kilometraje;
    public $combustible;
    public $precio;
    public $imagen;

    //Constructor
    public function __construct($id=null,$marca=null,$año=null,$kilometraje=null,$combustible=null,$precio=null,$imagen=null)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->año = $año;
        $this->kilometraje = $kilometraje;
        $this->combustible = $combustible;
        $this->precio = $precio;
        $this->imagen = $imagen;
    }
}

function compara($dato){
    return $dato["id"];
} 
?>