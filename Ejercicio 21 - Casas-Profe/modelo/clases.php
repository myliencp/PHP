<?php
class ficheroJson {
    public $lista;

    public function __construct( $nombre)
    {
        $this->lista = json_decode(file_get_contents($nombre),true);
    }

}

class usuario {
    public $nombre;
    public $apellidos;
    public $email;
    public $contraseña;
    public $hash;
  

    //Constructor
    public function __construct($nombre=null,$apellidos=null,$email=null,$contraseña=null,$hash=null)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->contraseña = $contraseña;
        $this->hash = $hash;
        $this->vigente = false;
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
        if (!valida($this->email)) {
            $valido = false;
            $errores['email'] = "El Correo ya existe";
        }
        
        // fin de la comprobación
        return $valido;

    }
}
?>