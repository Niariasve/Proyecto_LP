<h1 class="titulo-pagina">Crear una cuenta</h1>
<p class="descripcion-pagina">Crea una cuenta</p>

<?php echo $mensaje ?? ''; ?>

<form class="contenedor-form" action="/crear-cuenta" method="post">
    <div class="campo">
        <label class="campo-titulo" for="fcorreo">Correo</label>
        <input 
        type="mail"
        id="fcorreo"
        name="correo"
        placeholder="Tu Correo"
        required
        >
    </div>
    <div class="campo">
        <label class="campo-titulo" for="fpassword">Contraseña</label>
        <input 
        type="mail"
        id="fpassword"
        name="password"
        placeholder="Tu password"
        required
        >
    </div>

    <div class="botones">
        <input class="boton-negro" type="submit" value="Crear Cuenta">
        <input class="boton-negro" type="reset" value="Limpiar">
    </div>
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
</form>