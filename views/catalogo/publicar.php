<h1>Publicar un producto</h1>
<p>Publicar un producto</p>

<?php echo $mensaje ?? ''; ?>

<form action="/nuevo-producto" method="post">
    <div class="campo">
        <label for="ftitulo">Titulo de la publicacion</label>
        <input 
        id="ftitulo"
        name="titulo"
        placeholder="nombre del producto"
        required
        >
    </div>
    <div class="campo">
        <label for="fprecio">precio</label>
        <input
        type ='number'
        id="fprecio"
        name="precio"
        placeholder="$$$"
        step="0.01"
        required
        >
    </div>
    <div class="campo">
        <label for="fdescripcion">Descripcion</label>
        <input
        id="fdescripcion"
        name="descripcion"
        placeholder="descripcion"
        required
        >
    </div>
    <div class="campo">
        <label for="festado">Estado</label>
        <input
        id="festado"
        name="estado"
        placeholder="estado"
        required
        >
    </div>
    <div class="campo">
        <label for="fcondicion">Condicion</label>
        <input
        id="fcondicion"
        name="condicion"
        placeholder="condicion"
        required
        >
    </div>
    <div class="campo">
        <label for="fimagen">imagen</label>
        <input
        id="fimagen"
        name="imagen"
        placeholder="link de la imagen"
        >
    </div>

    <input type="submit" value="Publicar producto">
    <input type="reset" value="Limpiar">
</form>

<a href="/catalogo">Cancelar</a>