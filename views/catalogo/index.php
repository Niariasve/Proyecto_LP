<div>
    <?php include __DIR__ . '/../templates/nav.php'; ?>
</div>

<div class="catalogo">
    <?php foreach($productos as $producto) {
        echo $producto;
     } ?>
</div>