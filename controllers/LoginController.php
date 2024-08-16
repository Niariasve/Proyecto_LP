<?php 

require '../models/Usuario.php';

//Implementado por nestor arias
class LoginController {

    public static function login($router) {

        $mensaje = '';

        if (count($_GET) > 0) {
            $mensaje = 'Su cuenta ha sido creada correctamente puede iniciar sesión';
        }
        
        if (isPostMethod()) {
            $usuario = new Usuario($_POST);

            if ($usuario->validarCuenta()) {
                session_start();

                $_SESSION['id'] = $usuario->id;
                $_SESSION['correo'] = $usuario->correo;
                $_SESSION['login'] = true;
                $_SESSION['carrito'] = [];

                header('Location: /catalogo');
            } else {
                $mensaje = "Correo o Contraseña incorrectas";
            }
        }

        $router->render('auth/login', [
            "mensaje" => $mensaje
        ]);
    }

    public static function crear($router) {
        $mensaje = '';

        if(isPostMethod()) {
            $usuario = new Usuario($_POST);
            
            if (!$usuario->existeUsuario()) {
                $usuario->hashPassword();
                $usuario->guardar();

                header('Location: /?mensaje=1');
            } else {
                $mensaje = "El correo ya esta registrado";
            }
        }
        
        $router->render('auth/crear-cuenta', [
            "mensaje" => $mensaje
        ]);
    }

    public static function logout() {
        session_start();
        $_SESSION = [];
        header('Location: /');
    }
}