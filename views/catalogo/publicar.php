<div>
    <?php include __DIR__ . '/../templates/nav.php'; ?>
</div>
<div class='contenedor-form'>
    <form action="/nuevo-producto" method="post">
        <input
            class="campo-titulo"
            id="ftitulo"
            name="titulo"
            placeholder="Nombre del producto"
            required>
        <br>
        <label for="fprecio" class='precio-label'>$</label>
        <input
            class="campo-precio"
            type='number'
            id="fprecio"
            name="precio"
            placeholder="0"
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
            required></textarea>
        <div class='producto-dropdowns'>
            <div class="condicion-dropdown">
                Condición
                <select id='fcondicion' name="condicion" required default='Nuevo'>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Sellado">Sellado</option>
                    <option value="Usado - como nuevo">Usado - como nuevo</option>
                    <option value="Usado">Usado</option>
                </select>
            </div>
            <div class="estado-dropdown">
                Estado
                <select id='festado' name="estado" required default='Excelente'>
                    <option value="Excelente">Excelente</option>
                    <option value="Bueno">Bueno</option>
                    <option value="Decente">Decente</option>
                    <option value="Malo - funciona">Malo - funciona</option>
                    <option value="Malo - no funciona">Malo - no funciona</option>
                </select>
            </div>
        </div>
        <input
            class="campo-imagen"
            id="fimagen"
            name="imagen"
            placeholder="Ingresa la URL de la imagen">

        <input type="submit" class='publicar-editar-boton' value="Publicar producto">
    </form>

    <a href="/catalogo" class='boton-cancelar'>Cancelar</a>
</div>