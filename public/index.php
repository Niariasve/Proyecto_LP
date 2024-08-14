<?php

require __DIR__ . '/../router.php';
require __DIR__ . '/../controllers/LoginController.php';

require_once __DIR__ . '/../includes/funciones.php';

$router = new Router();

/* Login */
$router->get('/', [LoginController::class, 'login']);



/* Comprobar que la ruta ingresada se válida */
$router->comprobarRutas();