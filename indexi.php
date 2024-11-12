<?php
// Array de productos
$productos = [
    ["nombre" => "Venado", "precio" => "$150.000", "imagen" => "img/Gato2.jpeg"],
    ["nombre" => "León", "precio" => "$150.000", "imagen" => "img/Gato3.jpeg"],
    ["nombre" => "Gata", "precio" => "$150.000", "imagen" => "img/Gato4.jpeg"],
    ["nombre" => "Bailarinas", "precio" => "$150.000", "imagen" => "img/Gato11.jpeg"],
    ["nombre" => "León", "precio" => "$150.000", "imagen" => "img/Gato3.jpeg"],
    ["nombre" => "Conejo", "precio" => "$150.000", "imagen" => "img/Conejo.jpeg"],
    ["nombre" => "Conejos", "precio" => "$150.000", "imagen" => "img/Conejo1.jpeg"],
    ["nombre" => "Cats", "precio" => "$150.000", "imagen" => "img/Gato7.jpeg"],
    ["nombre" => "Rosita", "precio" => "$150.000", "imagen" => "img/Gato13.jpeg"],
    ["nombre" => "Leonsito", "precio" => "$150.000", "imagen" => "img/Leon2.jpeg"],
    ["nombre" => "Leona", "precio" => "$150.000", "imagen" => "img/Leon3.jpeg"],
    ["nombre" => "Ovejita", "precio" => "$150.000", "imagen" => "img/Ovejas.jpeg"],
    ["nombre" => "Vaca", "precio" => "$150.000", "imagen" => "img/Vaca.jpeg"],
    ["nombre" => "Ratoncito", "precio" => "$150.000", "imagen" => "img/Ratones.jpeg"]
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michalina</title>
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/gatorojo.png" type="image/png">
</head>

<body>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/logomicha.png" alt="Logotipo" width="150">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>Nuestros productos</h1>

        <div class="grid">
            <?php foreach ($productos as $producto): ?>
                <div class="producto">
                    <a href="producto.php">
                        <img class="producto__imagen" src="<?= htmlspecialchars($producto['imagen']) ?>" alt="<?= htmlspecialchars($producto['nombre']) ?>" width="200">
                        <div class="producto__informacion">
                            <p class="producto__nombre"><?= htmlspecialchars($producto['nombre']) ?></p>
                            <p class="producto__precio"><?= htmlspecialchars($producto['precio']) ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">Michalina - Todos los derechos reservados 2024.</p>
    </footer>
</body>

</html>
