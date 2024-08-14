<?php 

class Usuario {

    public $id;
    public $nombre;
    public $apellido;
    public $usuario;
    public $correo;
    public $password;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->usuario = $args['usuario'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->password = $args['password'] ?? '';
    }
}