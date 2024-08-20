<?php
echo "<h1>Editar $producto->titulo</h1>";

echo '<form action="/guardar-cambios" method="post">
    <div class="campo">
        <label for="ftitulo">Titulo de la publicacion</label>
        <input 
        id="ftitulo"
        name="titulo"
        value="' . htmlspecialchars($producto->titulo) . '"
        required
        >
    </div>
    <div class="campo">
        <label for="fprecio">precio</label>
        <input
        type="number"
        id="fprecio"
        name="precio"
        value="' . htmlspecialchars($producto->precio) . '"
        step="0.01"
        required
        >
    </div>
    <div class="campo">
        <label for="fdescripcion">Descripcion</label>
        <input
        id="fdescripcion"
        name="descripcion"
        value="' . htmlspecialchars($producto->descripcion) . '"
        required
        >
    </div>
    <div class="campo">
        <label for="festado">Estado</label>
        <input
        id="festado"
        name="estado"
        value="' . htmlspecialchars($producto->estado) . '"
        required
        >
    </div>
    <div class="campo">
        <label for="fcondicion">Condicion</label>
        <input
        id="fcondicion"
        name="condicion"
        value="' . htmlspecialchars($producto->condicion) . '"
        required
        >
    </div>
    <div class="campo">
        <label for="fimagen">imagen</label>
        <input
        id="fimagen"
        name="imagen"
        value="' . htmlspecialchars($producto->imagen) . '"
        >
    </div>
    <input type=hidden name="antiguo" value=" '. urlencode(json_encode($producto)) . '">
    <input type="submit" value="Actualizar producto">
</form>';

echo "<a href='/vista-producto/?id=".md5($producto->usuario.$producto->titulo)."'>Cancelar</a>";
?>
