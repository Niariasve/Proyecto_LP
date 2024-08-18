<?php

// implementado por jose julio suarez
class VistaProductoController
{

    public static function mostrar($router)
    {
        $csv = __DIR__ . '/../csv/productos.csv';
        $producto = null;
        $id = $_GET['id'];
        $lineas = file($csv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach($lineas as $linea){
            $atributos = str_getcsv($linea);
            $currentID = md5($atributos[0].$atributos[1]);
            if($id == $currentID){
                $producto = new Producto($atributos);
                break;
            }
        }
        
        $router->render('catalogo/vista-producto', [
            "producto" => $producto
        ]);
    }
}
