<?php 

// implementado por jose julio suarez
class NuevoProductoController {

    public static function publicar($router) {
        $mensaje = '';
        if (isPostMethod()) {
            $atributos = [$_SESSION['correo']];
            foreach($_POST as $atributo){
                $atributos[] = $atributo;
            }
            $producto = new Producto($atributos);
            $producto->guardar();

            header('Location: /catalogo');
        }
        else if(isset($_SESSION['correo'])){
            $router->render('catalogo/publicar', [
                "mensaje" => $mensaje
            ]);
        }
        else{
            header('Location: /');
        }
    }
}