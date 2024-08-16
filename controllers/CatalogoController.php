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
}