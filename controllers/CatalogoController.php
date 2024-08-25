<?php 

require '../models/Producto.php';

class CatalogoController {

    public static function index($router) {
        $csv = __DIR__ . '/../csv/productos.csv';
        $productos = [];
        $lineas = file($csv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach($lineas as $linea){
            $atributos = str_getcsv($linea);
            $productos[] = new Producto($atributos);
        }
        
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

    public static function add() {
        if(isset($_SESSION['login'])) {
            $idProducto = $_GET['id'];
            $_SESSION['carrito'][$idProducto] = Producto::getProducto($idProducto);
    
            header('Location: /catalogo');
        }
    }

    public static function remove() {
        
        if(isset($_SESSION['login'])) {
            $idProducto = $_GET['id'];
            unset($_SESSION['carrito'][$idProducto]);
            header('Location: /catalogo');      
        }
    }
}