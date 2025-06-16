<div>
    <?php include __DIR__ . '/../templates/nav.php'; ?>
</div>
<div class='contenedor-form'>
    <form action="/guardar-cambios" method="post">
        <input
            class="campo-titulo"
            id="ftitulo"
            name="titulo"
            value="<?php echo htmlspecialchars($producto->titulo); ?>"
            required>
        <br>
        <label for="fprecio" class='precio-label'>$</label>
        <input
            class="campo-precio"
            type='number'
            id="fprecio"
            name="precio"
            value="<?php echo htmlspecialchars($producto->precio); ?>"
            step="0.01"
            required>
        <script>
            const input = document.getElementById('ftitulo');

            function adjustWidth() {
                const testSpan = document.createElement('span');
                testSpan.style.visibility = 'hidden';
                testSpan.style.whiteSpace = 'pre';
                testSpan.style.fontFamily = window.getComputedStyle(input).fontFamily;
                testSpan.style.fontSize = window.getComputedStyle(input).fontSize;
                testSpan.textContent = input.value || input.placeholder;
                document.body.appendChild(testSpan);
                input.style.width = `${testSpan.offsetWidth + 20}px`; // Add some padding
                document.body.removeChild(testSpan);
            }

            input.addEventListener('input', adjustWidth);
            window.addEventListener('load', adjustWidth);
        </script>
        <br>
        <textarea
            class="campo-descripcion"
            id="fdescripcion"
            name="descripcion"
            placeholder="Escribe una descripción del producto"
            required><?php echo htmlspecialchars($producto->descripcion); ?></textarea>
        <div class='producto-dropdowns'>
            <div class="condicion-dropdown">
                Condición
                <select id='fcondicion' name="condicion" required">
                    <option value="Nuevo" <?= $producto->condicion == "Nuevo" ? 'selected' : '' ?>>Nuevo</option>
                    <option value="Sellado" <?= $producto->condicion == "Sellado" ? 'selected' : '' ?>>Sellado</option>
                    <option value="Usado - como nuevo" <?= $producto->condicion == "Usado - como nuevo" ? 'selected' : '' ?>>Usado - como nuevo</option>
                    <option value="Usado" <?= $producto->condicion == "Usado" ? 'selected' : '' ?>>Usado</option>
                </select>
            </div>
            <div class="estado-dropdown">
                Estado
                <select id='festado' name="estado" required >
                    <option value="Excelente" <?= $producto->estado == "Excelente" ? 'selected' : '' ?> >Excelente</option>
                    <option value="Bueno" <?= $producto->estado == "Bueno" ? 'selected' : '' ?> >Bueno</option>
                    <option value="Decente" <?= $producto->estado == "Decente" ? 'selected' : '' ?> >Decente</option>
                    <option value="Malo - funciona" <?= $producto->estado == "Malo - funciona" ? 'selected' : '' ?> >Malo - funciona</option>
                    <option value="Malo - no funciona" <?= $producto->estado == "Malo - no funciona" ? 'selected' : '' ?> >Malo - no funciona</option>
                </select>
            </div>
        </div>
        <input
            class="campo-imagen"
            id="fimagen"
            name="imagen"
            value="<?php echo htmlspecialchars($producto->imagen); ?>">

        <input type="hidden" name="antiguo" value="<?php echo urlencode(json_encode($producto)); ?>">
        <input type="submit" class='publicar-editar-boton' value="Guardar cambios">
    </form>

    <a href="/catalogo" class='boton-cancelar'>Cancelar</a>
</div>