<?php

// implementado por jose julio suarez
class EditorController
{

    public static function guardarCambios($router)
    {
        $objeto = json_decode(urldecode($_POST['antiguo']), true);
        $argumentos = [];
        foreach ($objeto as $atributo) {
            $argumentos[] = $atributo;
        }
        $antiguo = new Producto($argumentos);
        unset($_POST['antiguo']);
        $atributos = [$_SESSION['correo']];
        foreach ($_POST as $atributo) {
            $atributos[] = $atributo;
        }
        $nuevo = new Producto($atributos);
        $nuevo->guardar();
        $antiguo->eliminar();

        header("Location: /vista-producto/?id=".$nuevo->getId());
    }
}
