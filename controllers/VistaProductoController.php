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
    public static function eliminar($router){
        $objeto = json_decode(urldecode($_POST['producto']), true);
        $argumentos = [];
        foreach($objeto as $atributo){
            $argumentos[] = $atributo;
        }
        $producto = new Producto($argumentos);
        $producto->eliminar();
        header('Location: /catalogo');
    }
}
