<nav class='navigation'>
    <div class='left-nav'>
        <button class='boton-negro' onclick="window.location.href='/catalogo'">
            Catálogo
        </button>
        <a href="/nuevo-producto"><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLLAkeaX7f9nhlDk2aXHgoA9F_PmBU1V3EJA&s' height=30 width=30></a>
        <a href="/carrito"><img src='https://cdn.icon-icons.com/icons2/1456/PNG/512/mbricartadd_99553.png' height=30 width=30></a>
    </div>
    <div class='right-nav'>
        <?php
        session_start();
        if (!$_SESSION['login'] == true) { ?>
            <button class='boton-negro' onclick="window.location.href='/'">
                Iniciar Sesión
            </button>
            <button class='boton-negro' onclick="window.location.href='/crear-cuenta'">
                Registrarse
            </button>
        <?php } else { ?>
            <a>Bienvenido, <?php echo $_SESSION['correo'] ?></a>
            <button class='boton-negro' onclick="window.location.href='/logout'">
                Cerrar Sesión
            </button>
        <?php } ?>
    </div>

</nav>
<hr class="separator">