<?php

require __DIR__ . '/../router.php';
require __DIR__ . '/../controllers/LoginController.php';

require_once __DIR__ . '/../includes/funciones.php';

$router = new Router();

/* Login */
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);


/* Crear cuenta */
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

/* Comprobar que la ruta ingresada se válida */
$router->comprobarRutas();