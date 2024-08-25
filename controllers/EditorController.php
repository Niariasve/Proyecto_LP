<?php

// implementado por jose julio suarez
class EditorController
{

    public static function guardarCambios($router)
    {
        $objeto = json_decode(urldecode($_POST['antiguo']), true);
        $argumentos = [];
        
        $argumentos[] = $objeto['usuario'];
        $argumentos[] = $objeto['titulo'];
        $argumentos[] = $objeto['precio'];
        $argumentos[] = $objeto['descripcion'];
        $argumentos[] = $objeto['condicion'];
        $argumentos[] = $objeto['estado'];
        $argumentos[] = $objeto['imagen'];

        $antiguo = new Producto($argumentos);
        unset($_POST['antiguo']);
        $atributos = [$_SESSION['correo']];
        foreach ($_POST as $atributo) {
            $atributos[] = $atributo;
        }
        $nuevo = new Producto($atributos);
        $antiguo->eliminar();
        $nuevo->guardar();

        header("Location: /vista-producto/?id=".$nuevo->getId());
    }
}
