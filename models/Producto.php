<?php

class Producto
{
    public static $csv = __DIR__ . '/../csv/productos.csv';

    public $usuario;
    public $titulo;
    public $precio;
    public $descripcion;
    public $estado;
    public $condicion;
    public $imagen;

    public function __construct($args = [])
    {
        $this->usuario = $args[0] ?? '';
        $this->titulo = $args[1] ?? '';
        $this->precio = $args[2] ?? 0;
        $this->descripcion = $args[3] ?? '';
        $this->condicion = $args[4] ?? '';
        $this->estado = $args[5] ?? '';
        $this->imagen = $args[6] ?? '';
    }

    public function guardar()
    {
        if (($archivo = fopen(static::$csv, "a")) != false) {
            fputcsv($archivo, [
                $this->usuario,
                $this->titulo,
                $this->precio,
                $this->descripcion,
                $this->condicion,
                $this->estado,
                $this->imagen
            ]);
        }
        fclose($archivo);
    }

    public function eliminar()
    {
        $articulo = $this->usuario . "," .
            $this->titulo . "," .
            $this->precio . "," .
            $this->descripcion . "," .
            $this->condicion . "," .
            $this->estado . "," .
            $this->imagen;
        $lineas = file(static::$csv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $filteredLines = array_filter($lineas, function ($linea) use ($articulo) {
            return trim(str_replace('"', '', $linea)) != trim(str_replace('"', '', $articulo));
        });
        file_put_contents(static::$csv, implode(PHP_EOL, $filteredLines) . PHP_EOL);
    }

    public function validarVendedor($usuario): bool
    {
        return $this->usuario == $usuario;
    }

    public function getId(): String
    {
        return md5($this->usuario . $this->titulo);
    }

    public function __toString(): String
    {
        return "<div class='tarjeta-producto' onclick=window.location.href='/vista-producto/?id=" . $this->getId() . "'>  
            <img src='" .
            $this->imagen .
            "' class='imagen-tarjeta'><br>
            <div class='titulo-tarjeta'>" .
            $this->titulo .
            "</div>
            <div class='precio-tarjeta'>
            $" . $this->precio .
            "</div>
            </div>";
    }

    public static function getProducto($id) {
        if (($archivo = fopen(static::$csv, 'r')) != false) {
            while(($linea = fgetcsv($archivo, 1000, ',')) != false) {
                $producto = new Producto($linea);
                if ($producto->getId() == $id) {
                    return $producto;
                }
            }
        }
        return null;
    }
}
