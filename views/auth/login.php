<!-- Login: Néstor Arias -->
<h1 class="titulo-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesión</p>

<?php echo "<p class='descripcion-pagina'>$mensaje</p>" ?? ''; ?>

<form class="contenedor-form" action="/" method="post">
    <div class="campo">
        <label class="campo-titulo" for="fcorreo">Correo</label>
        <input
        type="mail" 
        id="fcorreo" 
        placeholder=" Tu Correo"
        name="correo"
        required
        >
    </div>

    <div class="campo">
        <label class="campo-titulo" for="fpassword">Password</label>
        <input 
        type="text" 
        id="fpassword" 
        placeholder="Tu Contraseña"
        name="password"
        required
        >
    </div>

    <input class="boton-negro" type="submit" value="Iniciar Sesión">
    <div class="botones">
        <a href="/crear-cuenta">¿No tienes una cuenta? Crea una</a>
        <a href="/catalogo">Ver Catalogo</a>
    </div>
</form>