<script>
    function showConfirmation() {
        const userConfirmed = confirm("Estas seguro? Esta accion es irreversible");
        if (userConfirmed) {
            document.getElementById('eliminarForm').submit();
        }
    }
</script>
<h1><?php echo $producto->titulo; ?> </h1>
<a href='/catalogo'>Volver a la tienda</a>
<?php
if ($_SESSION['correo'] == $producto->usuario) {
    echo "<form id=eliminarForm action='eliminar-producto' method=post>
        <input type=hidden name=producto value=" . urlencode(json_encode($producto)) . ">
        <button type=button onclick=showConfirmation('eliminarForm')>Eliminar producto</button>
        </form>
        <form id=editarForm action='editar-producto' method=post>
        <input type=hidden name=producto value=" . urlencode(json_encode($producto)) . ">
        <input type='submit' value='Editar producto'>
        </form>"
        ;
}
?>
<br>
<img src=<?php echo $producto->imagen; ?> width=500 height=500>
<br>
<h2>Precio: <?php echo $producto->precio; ?> </h2>
<h2>Descripcion: <?php echo $producto->descripcion; ?> </h2>
<h2>Condicion: <?php echo $producto->condicion; ?> </h2>
<h2>Estado: <?php echo $producto->estado; ?> </h2>
<h2>Vendedor: <?php echo $producto->usuario; ?> </h2>