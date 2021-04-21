<?php
class ficheroJson {
    public $lista;

    public function __construct( $nombre)
    {
        $this->lista = json_decode(file_get_contents($nombre),true);
    }

    public function valida($correo) {
        $key = array_search($correo, array_column($this->lista, 'correo'));
        if ($key === false) {
            return true;    
        } else {
            return false;
        }
    }

    public function verifico($nombre,$hash) {
        $key = array_search($nombre, array_column($this->lista, 'nombre'));
        if ($key !== false){
            if ($this->lista[$key]["hash"] == $hash) {
                // Aqui tengo que dar por valido el correo
                $usuario = new usuario($this->lista[$key]["nombre"],$this->lista[$key]["apellidos"],$this->lista[$key]["email"],$this->lista[$key]["contraseña"],$this->lista[$key]["hash"],true);
                $this->lista[$key] = $usuario;
                $this->grabaFichero("claves.json",null);
                return true;
            } else {
                return false;
            }
        }
    }

    public function grabaFichero($nombre,$usuario) {
            if ($usuario !=null){
                array_push($this->lista,$usuario);
            }
            
            $salida = json_encode($this->lista,JSON_UNESCAPED_UNICODE + JSON_PRETTY_PRINT);
            file_put_contents($nombre,$salida);
    }
}

class usuario {
    public $nombre;
    public $apellidos;
    public $email;
    public $contraseña;
    public $hash;
    public $vigente;
  

    //Constructor
    public function __construct($nombre=null,$apellidos=null,$email=null,$contraseña=null,$hash=null,$vigente)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->contraseña = $contraseña;
        $this->hash = $hash;
        $this->vigente = $vigente;
    }

    public function validarusuario(&$errores)
    {
        $valido = true;
        // Empezar comprobaciones 
        if (!$this->nombre) {
            $valido = false;
            $errores['nombre'] = "Nombre requerido";
        }
        if (!$this->apellidos) {
            $valido = false;
            $errores['apellidos'] = "Apellidos requerido";
        }
        if (!$this->email && !filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
            $valido = false;
            $errores['email'] = "Correo no válido";
        }
        $persona=new ficheroJson("claves.json");
        if (!$persona($this->email)) {
            $valido = false;
            $errores['email'] = "El correo ya existe";
        }
        
        // fin de la comprobación
        return $valido;

    }
}
?>