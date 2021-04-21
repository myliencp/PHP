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

    public function nuevoAlumno() {
        return max(array_map("compara",$this->lista))+1;
    }
    // array_map:Aplica la retrollamada a los elementos de los arrays dados

    public function grabaFichero($fichero,$elemento,$alumno) {
        if (gettype(array_search($alumno->id, array_column($this->lista, 'id'))) != "boolean"){
            $this->lista[array_search($alumno->id, array_column($this->lista, 'id'))] = $alumno;
        } else{
            array_push($this->lista,$alumno);
        }
        $salida = '{"'.$elemento.'":'.json_encode($this->lista,JSON_UNESCAPED_UNICODE + JSON_PRETTY_PRINT).'}';
        file_put_contents($fichero,$salida);
        move_uploaded_file($_FILES['imagen_fichero']['tmp_name'],"./ficheros/imagenes/".$alumno->imagen);
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
        if ($imagen != "notiene.gif"){
            unlink("./ficheros/imagenes/".$imagen);//elimina la foto
        }
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
    //Validaciones de los campos del formulario
    public function validarAlumno(&$errores)
    {
        $valido = true;
        //Empezar comprobaciones
        if(!$this->nombre){
            $valido = false;
            $errores['nombre'] = "Nombre requerido";
        }
        if(!$this->apellidos){
            $valido = false;
            $errores['apellidos'] = "Apellidos requerido";
        }
        if(!$this->email && !filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $valido = false;
            $errores['email'] = "Correo no válido";
        }
        // if (!$this->telefono && !filter_var($this->telefono,FILTER_VALIDATE_REGEXP,
        //     array(
        //      "options" => array("^[0-9]{3}[-][0-9]{2}[-][0-9]{2}[-][0-9]{2}$")
        //     ))) {
        //         // https://www.adictosaltrabajo.com/2015/01/29/regexsam/    
        //         // https://www.genbeta.com/desarrollo/expresiones-regulares-regex-herramientas-online-para-probarlas
        //     $valido = false;
        //     $errores['telefono'] = "Telefono no válido";
        // }
        // if (!filter_var($this->web,FILTER_VALIDATE_URL)) {
        //     $valido = false;
        //     $errores['web'] = "Página WEB no válida";
        // }
        //Fin de las comprobaciones
        return $valido;
    }
}

function compara($dato){
    return $dato["id"];
} 
?>