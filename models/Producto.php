<?php

class Producto
{
    public static $csv = __DIR__ . '/../csv/productos.csv';
    public static $imagenes = __DIR__ . '/../img/';

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
        $this->precio = $args[2] ?? null;
        $this->descripcion = $args[3] ?? '';
        $this->estado = $args[4] ?? '';
        $this->condicion = $args[5] ?? '';
        $this->imagen = $args[6] ?? '';
        if (strlen($this->imagen) == 0) {
            $this->imagen = 'placeholder.jpg';
        }
    }

    public function guardar()
    {
        if (($archivo = fopen(static::$csv, "a")) != false) {
            fputcsv($archivo, [
                $this->usuario,
                $this->titulo,
                $this->precio,
                $this->descripcion,
                $this->estado,
                $this->condicion,
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
            $this->estado . "," .
            $this->condicion . "," .
            $this->imagen;
        $lineas = file(static::$csv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $filteredLines = array_filter($lineas, function ($linea) use ($articulo) {
            return trim($linea) !== $articulo;
        });
        file_put_contents(static::$csv, implode(PHP_EOL, $filteredLines) . PHP_EOL);
    }

    public function validarVendedor($usuario): bool
    {
        return $this->usuario == $usuario;
    }

    public function __toString(): String
    {
        return "<div class='product'> 
            <img src='" .
            /*hay que solucionar el acceso a /img/  */
            static::$imagenes.$this->imagen .
            "'> <br>" .
            $this->titulo .
            "</div>";
    }
}
