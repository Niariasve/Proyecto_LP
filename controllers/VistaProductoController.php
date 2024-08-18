<?php

// implementado por jose julio suarez
class VistaProductoController
{

    public static function mostrar($router, $id)
    {
        $producto = null;
        
        $router->render('catalogo/vista-producto', [
            //"producto" => $producto
            "id" => $id
        ]);
    }
}
