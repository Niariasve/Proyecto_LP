<h1>Catalogo de productos</h1>

<div>
    <?php include __DIR__ . '/../templates/nav.php'; ?>

    <div>
        <?php 
            session_start();

            if (!$_SESSION['login'] == true) { ?>
                <a href="/">Iniciar Sesión</a>
                <a href="/crear-cuenta">Registrarse</a>
            <?php } else { ?>
                <p>Bienvenido, <?php echo $_SESSION['correo'] ?></p>
                <a href="/logout">Cerrar Sesión</a>
                <?php echo $_SESSION['id'] ?>
            <?php } ?>
    </div>
</div>
    
<!-- Aqui van los productos!!! -->
<h2>Productos</h2>
<div class="catalogo">
    <?php foreach($productos as $producto) { ?>
        <!-- Aqui iria cada producto formateado -->
    <?php } ?>
</div>