<?php
// Verificamos si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibimos los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';
    $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $fechaCreacion = isset($_POST['fecha_creacion']) ? $_POST['fecha_creacion'] : '';

    // Validamos que los datos necesarios están presentes
    if (empty($nombre) || empty($categoria) || empty($precio) || empty($fechaCreacion)) {
        echo json_encode(['success' => false, 'error' => 'Faltan datos obligatorios']);
        exit();
    }

    // Verificamos si se subió una imagen
    $imagenProducto = null;
    if (isset($_FILES['imagen_producto']) && $_FILES['imagen_producto']['error'] == 0) {
        $imagen = $_FILES['imagen_producto'];
        $nombreImagen = $imagen['name'];
        $rutaImagen = $imagen['tmp_name'];

        // Verificamos el tipo de archivo (solo imágenes JPEG/PNG)
        $tipoImagen = mime_content_type($rutaImagen);
        if ($tipoImagen == 'image/jpeg' || $tipoImagen == 'image/png') {
            // Validamos el tamaño de la imagen (máximo 5MB por ejemplo)
            if ($imagen['size'] > 5 * 1024 * 1024) {
                echo json_encode(['success' => false, 'error' => 'La imagen no puede ser mayor de 5MB']);
                exit();
            }

            // Definimos un directorio para almacenar las imágenes
            $directorio = 'imagenes/';
            if (!is_dir($directorio)) {
                mkdir($directorio, 0777, true);  // Crea el directorio si no existe
            }
            $archivoDestino = $directorio . basename($nombreImagen);

            // Movemos la imagen al directorio destino
            if (move_uploaded_file($rutaImagen, $archivoDestino)) {
                $imagenProducto = $archivoDestino;
            } else {
                echo json_encode(['success' => false, 'error' => 'Error al subir la imagen']);
                exit();
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Solo se permiten imágenes JPEG o PNG']);
            exit();
        }
    }

    // Aquí puedes realizar el código para almacenar los datos en una base de datos.
    // A continuación se muestra un ejemplo de cómo podrías hacerlo con PDO.

    try {
        // Crear una conexión PDO con la base de datos
        $pdo = new PDO("mysql:host=localhost;dbname=bd_michalina", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insertamos los datos en la base de datos
        $sql = "INSERT INTO productos (nombre, categoria, precio, descripcion, fecha_creacion, imagen_producto)
                VALUES (:nombre, :categoria, :precio, :descripcion, :fecha_creacion, :imagen_producto)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':fecha_creacion', $fechaCreacion);
        $stmt->bindParam(':imagen_producto', $imagenProducto);

        // Ejecutamos la consulta
        $stmt->execute();

        // Responder con éxito
        echo json_encode(['success' => true, 'message' => 'Producto registrado exitosamente']);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => 'Error en la base de datos: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Método de solicitud no válido']);
}
?>
