<!-- Login: Néstor Arias -->
<h1>Login</h1>
<p>Inicia Sesión</p>

<?php echo $mensaje ?? ''; ?>

<form action="/" method="post">
    <div class="campo">
        <label for="fcorreo">Correo</label>
        <input
        type="mail" 
        id="fcorreo" 
        placeholder=" Tu Correo"
        name="correo"
        required
        >
    </div>

    <div class="campo">
        <label for="fpassword">Password</label>
        <input 
        type="text" 
        id="fpassword" 
        placeholder="Tu Contraseña"
        name="password"
        required
        >
    </div>

    <input type="submit" value="Iniciar Sesión">
</form>

<a href="/crear-cuenta">¿No tienes una cuenta? Crea una</a>