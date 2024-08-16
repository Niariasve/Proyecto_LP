<h1>Crear una cuenta</h1>
<p>Crea una cuenta</p>

<?php echo $mensaje ?? ''; ?>

<form action="/crear-cuenta" method="post">
    <div class="campo">
        <label for="fcorreo">Correo</label>
        <input 
        type="mail"
        id="fcorreo"
        name="correo"
        placeholder="Tu Correo"
        required
        >
    </div>
    <div class="campo">
        <label for="fpassword">Contraseña</label>
        <input 
        type="mail"
        id="fpassword"
        name="password"
        placeholder="Tu password"
        required
        >
    </div>

    <input type="submit" value="Crear Cuenta">
    <input type="reset" value="Limpiar">
</form>