<?php 

require '../includes/funciones.php';
require '../models/Usuario.php';

class LoginController {

    public static function login($router) {
        
        if (isPostMethod()) {
            debug($_POST);
        }

        $router->render('auth/login', [

        ]);
    }

    public static function crear($crear) {
        echo "Desde crear cuenta";
    }
}