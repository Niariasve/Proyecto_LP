<?php 

class CatalogoController {

    public static function index($router) {

        $productos = [];
        /*
            Aqui va la logica para enviar a los productos
            a la vista en una lista y en el catalogo se deben iterar en un for
        */
        
        $router->render('catalogo/index', [
            "productos" => $productos
        ]);
    }

    public static function carrito($router) {
        
        //Productos quemados hasta terminar la interaccion de producto
        $productos = [];
        $producto1 = [
            "id" => "0",
            "nombre" => "computadora",
            "descripcion" => "computadora buena bien buena",
            "precio" => "160"
        ];
        $producto2 = [
            "id" => "1",
            "nombre" => "telefono",
            "descripcion" => "telefono buena bien buena",
            "precio" => "80"
        ];
        $productos[] = $producto1;
        $productos[] = $producto2;

        $router->render('catalogo/carrito', [
            "productos" => $productos
        ]);
    }
}