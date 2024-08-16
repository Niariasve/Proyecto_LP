<?php

require __DIR__ . '/../router.php';
require __DIR__ . '/../includes/funciones.php';
require __DIR__ . '/../controllers/LoginController.php';
require __DIR__ . '/../controllers/CatalogoController.php';

$router = new Router();

/* Login */
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);

/* Logout */
$router->get('/logout', [LoginController::class, 'logout']);

/* Crear cuenta */
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

/* Catalogo */
$router->get('/catalogo', [CatalogoController::class, 'index']);

/* Comprobar que la ruta ingresada se válida */
$router->comprobarRutas();