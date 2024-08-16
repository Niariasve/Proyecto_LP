<h1>Catalogo de productos</h1>

<div>
    <nav>
        <a href="#">Productos</a>
        <a href="#">Publicar producto</a>
        <a href="#">Mi carrito</a>
    </nav>

    <div>
        <?php 
            session_start();

            if (!$_SESSION['login'] == true) { ?>
                <a href="/">Iniciar Sesión</a>
                <a href="/crear-cuenta">Registrarse</a>
            <?php } else { ?>
                <p>Bienvenido, <?php echo $_SESSION['correo'] ?></p>
                <a href="/logout">Cerrar Sesión</a>
            <?php } ?>
    </div>
</div>
    
<!-- Aqui van los productos!!! -->
<div class="catalogo">
    <?php foreach($productos as $producto) { ?>
        <!-- Aqui iria cada producto formateado -->
    <?php } ?>
</div>