<h1>Editar <?php echo htmlspecialchars($producto->titulo); ?></h1>

<form action="/guardar-cambios" method="post">
    <div class="campo">
        <label for="ftitulo">Titulo de la publicacion</label>
        <input 
        id="ftitulo"
        name="titulo"
        value="<?php echo htmlspecialchars($producto->titulo); ?>"
        required
        >
    </div>
    <div class="campo">
        <label for="fprecio">Precio</label>
        <input
        type="number"
        id="fprecio"
        name="precio"
        value="<?php echo htmlspecialchars($producto->precio); ?>"
        step="0.01"
        required
        >
    </div>
    <div class="campo">
        <label for="fdescripcion">Descripcion</label>
        <input
        id="fdescripcion"
        name="descripcion"
        value="<?php echo htmlspecialchars($producto->descripcion); ?>"
        required
        >
    </div>
    <div class="campo">
        <label for="festado">Estado</label>
        <input
        id="festado"
        name="estado"
        value="<?php echo htmlspecialchars($producto->estado); ?>"
        required
        >
    </div>
    <div class="campo">
        <label for="fcondicion">Condicion</label>
        <input
        id="fcondicion"
        name="condicion"
        value="<?php echo htmlspecialchars($producto->condicion); ?>"
        required
        >
    </div>
    <div class="campo">
        <label for="fimagen">Imagen</label>
        <input
        id="fimagen"
        name="imagen"
        value="<?php echo htmlspecialchars($producto->imagen); ?>"
        >
    </div>
    <input type="hidden" name="antiguo" value="<?php echo urlencode(json_encode($producto)); ?>">
    <input type="submit" value="Actualizar producto">
</form>

<a href="/vista-producto/?id=<?php echo md5($producto->usuario . $producto->titulo); ?>">Cancelar</a>