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
                    <option value="Nuevo" <?php if($producto->condicion == "Nuevo") echo "selected";?>>Nuevo</option>
                    <option value="Sellado" <?php if($producto->condicion == "Sellado") echo "selected";?>>Sellado</option>
                    <option value="Usado - como nuevo" <?php if($producto->condicion == "Usado - como nuevo") echo "selected";?>>Usado - como nuevo</option>
                    <option value="Usado" <?php if($producto->condicion == "Usado") echo "selected";?>>Usado</option>
                </select>
            </div>
            <div class="estado-dropdown">
                Estado
                <select id='festado' name="estado" required >
                    <option value="Excelente" <?php if($producto->estado == "Excelente") echo "selected";?> >Excelente</option>
                    <option value="Bueno" <?php if($producto->estado == "Bueno") echo "selected";?> >Bueno</option>
                    <option value="Decente" <?php if($producto->estado == "Decente") echo "selected";?> >Decente</option>
                    <option value="Malo - funciona" <?php if($producto->estado == "Malo - funciona") echo "selected";?> >Malo - funciona</option>
                    <option value="Malo - no funciona" <?php if($producto->estado == "Malo - no funciona") echo "selected";?> >Malo - no funciona</option>
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