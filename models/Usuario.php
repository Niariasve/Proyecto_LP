<?php 

class Usuario {

    public $id;
    public $correo;
    public $password;

    public static $csv = __DIR__ . '/../csv/usuarios.csv';

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->correo = $args['correo'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    public function validarCuenta() {
        if (($archivo = fopen(static::$csv, "r")) != false) {
            while (($linea = fgetcsv($archivo, 1000, ',')) != false) {
                if ($this->correo == $linea[1] && password_verify($this->password, $linea[2])) {
                    $this->id = $linea[0];
                    fclose($archivo);
                    return true;
                }
            }
        }
        fclose($archivo);
        return false;
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
        fclose($archivo);
    }

    public function existeUsuario() : bool {
        if (($archivo = fopen(static::$csv, "r")) != false) {
            while (($linea = fgetcsv($archivo, 1000, ',')) != false) {
                $correo = $linea[1];
                if ($this->correo == $correo) {
                    fclose($archivo);
                    return true;
                }
            }
        }
        fclose($archivo);
        return false;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }

    private static function ultimoId() : int {
        $id = 0;
        if (($archivo = fopen(static::$csv, 'r')) != false) {
            while(($linea = fgetcsv($archivo, 1000, ',')) != false) {
                $id += 1;
            }
        }
        fclose($archivo);
        return $id;
    }
}