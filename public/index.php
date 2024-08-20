<?php

require __DIR__ . '/../router.php';
require __DIR__ . '/../includes/funciones.php';
require __DIR__ . '/../controllers/LoginController.php';
require __DIR__ . '/../controllers/CatalogoController.php';
require __DIR__ . '/../controllers/NuevoProductoController.php';
require __DIR__ . '/../controllers/VistaProductoController.php';

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

/* Nuevo articulo */
$router->get('/nuevo-producto', [NuevoProductoController::class, 'publicar']);
$router->post('/nuevo-producto', [NuevoProductoController::class, 'publicar']);

/* Carrito */
$router->get('/carrito', [CatalogoController::class, 'carrito']);

/* Pagina del producto */
$router->get('/vista-producto/', [VistaProductoController::class, 'mostrar']);

/* Manipulacion de productos */
$router->post('/vista-producto/eliminar-producto', [VistaProductoController::class, 'eliminar']);

/* Comprobar que la ruta ingresada se válida */
$router->comprobarRutas();