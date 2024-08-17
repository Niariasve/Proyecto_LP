<?php include __DIR__ . '/../templates/nav.php'; ?>

<h1>Mi Carrito</h1>
<p>Mis productos</p>

<div class="contenedor-catalogo">
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        <?php foreach($productos as $producto) { ?>
            <tr>
                <td>
                    <div style="display:flex; flex-direction:column;">
                        <p><?php echo $producto['nombre'] ?></p>
                        <p><?php echo $producto['descripcion'] ?></p>
                    </div>
                </td>
                <td><?php echo $producto['precio']; ?></td>
                <td>+ 2 -</td>
                <td>500</td>
                <td>
                    <form action="catalogo/eliminar" method="post">
                        <input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>