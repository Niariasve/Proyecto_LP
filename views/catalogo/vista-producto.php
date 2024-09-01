<div>
    <?php include __DIR__ . '/../templates/nav.php'; ?>
</div>
<script>
    function showConfirmation() {
        const userConfirmed = confirm("¿Estás seguro? Esta acción es irreversible.");
        if (userConfirmed) {
            document.getElementById('eliminarForm').submit();
        }
    }
</script>
<div class='contenedor-producto'>
    <div class='contenedor-producto-left'>
        <img class='imagen-producto' src=<?php echo $producto->imagen; ?>>
        <?php
        if (isset($_SESSION['login'])) {
            if ($_SESSION['correo'] == $producto->usuario) {
                echo "<div class='herramientas-vendedor'>
                <form id=eliminarForm action='eliminar-producto' method=post>
            <input type=hidden name=producto value=" . urlencode(json_encode($producto)) . ">
            <button type=button class='boton-negro' onclick=showConfirmation('eliminarForm')>Eliminar producto</button>
            </form>
            <form id=editarForm action='editar-producto' method=post>
            <input type=hidden name=producto value=" . urlencode(json_encode($producto)) . ">
            <input type='submit' class='boton-negro' value='Editar producto'>
            </form>
            </div>";
            } else {
                if (!in_array($producto, $_SESSION['carrito'])) { ?>
                    <a class='boton-negro' href="/añadir-producto?id=<?php echo $producto->getId() ?>">Añadir a Carrito</a>
                <?php } else { ?>
                    <a class='boton-negro' href="/sacar-producto?id=<?php echo $producto->getId() ?>">Quitar de Carrito</a>
                <?php } ?>
        <?php }
        } ?>
    </div>
    <div class='info-producto'>
        <label class='titulo-producto'><?php echo $producto->titulo; ?> </label>
        <label class='precio-producto'>$<?php echo $producto->precio; ?> </label>
        <div class='contenedor-descripcion'>
            <label class='subtitulo'>Descripción:</label>
            <label class='descripcion-producto'><?php echo $producto->descripcion; ?> </label>
        </div>
        <div class='contenedor-info-misc'>
            <div class='contenedor-condicion'>
                <label class='subtitulo'>Condición:</label>
                <label class='condicion-producto'><?php echo $producto->condicion; ?> </label>
            </div>
            <div class='contenedor-estado'>
                <label class='subtitulo'>Estado:</label>
                <label class='estado-producto'><?php echo $producto->estado; ?> </label>
            </div>
        </div>
        <div class='contenedor-vendedor'>
            <label class='subtitulo'>Vendedor:</label>
            <label class='vendedor-producto'><?php echo $producto->usuario; ?> </label>
        </div>
    </div>
</div>