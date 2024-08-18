<h1><?php echo $producto->titulo; ?> </h1>
<a href='/catalogo'>Volver a la tienda</a>
<img src=<?php echo $producto->imagen; ?> width=500 height=500>
<h2>Precio: <?php echo $producto->precio; ?> </h2>
<h2>Descripcion: <?php echo $producto->descripcion; ?> </h2>
<h2>Estado: <?php echo $producto->estado; ?> </h2>
<h2>Condicion: <?php echo $producto->condicion; ?> </h2>
<h2>Vendedor: <?php echo $producto->usuario; ?> </h2>