<?php 

class Usuario {

    public $id;
    public $nombre;
    public $apellido;
    public $usuario;
    public $correo;
    public $password;

    public static $csv = __DIR__ . '/../csv/usuarios.csv';

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->correo = $args['correo'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    public function guardar() {
        $id = static::ultimoId();
        if (($archivo = fopen(static::$csv, "a")) != false) {
            fputcsv($archivo, [
                $id,
                $this->correo,
                $this->password,
            ]);
        }
    }

    public function validarUsuario() {

    }

    private function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }

    private static function ultimoId() : int {
        $id = 0;
        if (($archivo = fopen(static::$csv, 'r')) != false) {
            while(($linea = fgetcsv($archivo, 1000, ',')) != false) {
                $id += 1;
            }
        }
        return $id;
    }
}