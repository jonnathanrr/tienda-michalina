<!-- Aquí comienza el modal -->
<div class="modal fade" id="agregarEmpleadoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 titulo_modal">Registrar Nuevo Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para registrar el producto -->
                <form id="formularioEmpleado" action="acciones.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoría</label>
                        <input type="text" name="categoria" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" name="precio" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <input type="text" name="descripcion" class="form-control" />
                    </div>
                    <div class="mb-3 mt-4">
                        <label class="form-label">Imagen producto</label>
                        <input class="form-control form-control-sm" type="file" name="imagen_producto" accept="image/png, image/jpeg" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha creación</label>
                        <input type="date" name="fecha_creacion" class="form-control" />
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn_add">
                            Registrar nuevo producto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script JavaScript para manejar el envío del formulario con AJAX -->
<script>
// Evitar que el formulario se envíe de manera tradicional
document.getElementById("formularioEmpleado").addEventListener("submit", function(event) {
    event.preventDefault();  // Prevenir el comportamiento por defecto de enviar el formulario

    // Crear un objeto FormData con los datos del formulario
    var form = document.getElementById("formularioEmpleado");
    var formData = new FormData(form);

    // Usar fetch para enviar los datos sin recargar la página
    fetch('acciones.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())  // Espera la respuesta del servidor
    .then(data => {
        if (data.success) {
            alert('Producto registrado exitosamente');
            // Aquí puedes hacer cualquier acción después del registro, como cerrar el modal o limpiar el formulario
        } else {
            alert('Hubo un error al registrar el producto');
        }
    })
    .catch(error => {
        console.error('Error al enviar los datos:', error);
        alert('Ocurrió un error en la solicitud');
    });
});
</script>

<!-- Asegúrate de incluir las librerías de Bootstrap y otros recursos al final si es necesario -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
