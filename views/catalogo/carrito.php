<?php 
include __DIR__ . '/../templates/nav.php'; 
$index = 0;
?>

<h1>Mi Carrito</h1>
<p>Mis productos</p>

<div class="contenedor-catalogo">
    <table class="carrito">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        <?php foreach($productos as $key => $producto) { ?>
            <tr>
                <td>
                    <div class="producto-carrito">
                        <?php echo $index ?>
                        <p class="producto-titulo"><?php echo $producto->titulo ?></p>
                        <p class="producto-descripcion"><?php echo $producto->descripcion ?></p>
                    </div>
                </td>
                <td>
                    <p class="producto-precio"><?php echo $producto->precio; ?></p>
                </td>
                <td>
                    <div class="cantidad-boton">
                        <button class="sumar" type="button" data-producto="<?php echo $index; ?>">+</button>
                        <p class="producto-cantidad">1</p>
                        <button class="restar" type="button">-</button>
                    </div>                    
                </td>
                <td>
                    <p class="producto-total"><?php echo $producto->precio ?></p>
                </td>
                <td class="boton-eliminar">
                    <form action="catalogo/eliminar" method="post">
                        <input type="hidden" name="id" value="<?php echo $producto->id ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        <?php $index++; } ?>
    </table>
    <div>
        <h2>Resumen:</h2>
        <div class="resumen-item">
            <p>Items:</p>
            <p class="total-productos"></p>
        </div>
        <div class="resumen-item">
            <p>Subtotal:</p>
            <p class="producto-subtotal">$123</p> 
        </div>
        <div class="resumen-item">
            <p>Total:</p>
            <p class="total">0</p>
        </div>
    </div>
</div>


<script src="/js/app.js"></script>