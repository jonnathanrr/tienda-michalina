<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Michalina</title>
    <meta name="description" content="Blog Michalina: historias, cuidados, y más.">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Staatliches&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/gatorojo.png" type="image/png">
</head>

<body>

    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="../index.html">
                    <h1 class="logo__nombre no-margin centrar-texto">Blog<span class="logo__bold"> Michalina</span></h1>
                </a>

                <nav class="navegacion">
                    <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>
                    <a href="productos.html" class="navegacion__enlace">Productos</a>
                    <a href="contacto.html" class="navegacion__enlace">Contacto</a>
                </nav>

            </div>
        </div>
        <div class="header__texto">
            <h2 class="no-margin">Descubre el mundo mágico de Michalina </h2>
            <p class="no-margin">Un detalle muy especial muñecos artesanales elaborados con materiales artesanales.</p>
        </div>
    </header>

    <div class="contenedor contenido-principal">
        <main class="blog">
            <h3>Nuestro Blog</h3>
            <img src="img/Multimedia rayas.jpeg" alt="Imagen Colgante" class="imagen-colgante">

            <article class="entrada">
                <div class="entrada__imagen">
                    <picture>
                        <!-- <source loading="lazy" srcset="img/peluche1.webp" type="image/webp"> -->
                        <img loading="lazy" src="img/Multimedia (13).jpeg" alt="imagen de peluche">
                    </picture>
                </div>
                <div class="entrada__contenido">
                    <h4 class="no-margin">Cuidados para tus muñecos favoritos</h4>
                    <p>"Consejo para cuidar tu Michalina: Lávalo a mano para preservar su calidad y prolongar su
                        durabilidad." </p>
                    <a href="concejos.html" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>

            <article class="entrada">
                <div class="entrada__imagen">
                    <picture>
                        <!-- <source loading="lazy" srcset="img/peluche2.webp" type="image/webp"> -->
                        <img loading="lazy" src="img/Gato3.jpeg" alt="imagen de peluche">
                    </picture>
                </div>
                <div class="entrada__contenido">
                    <h4 class="no-margin">Historias mágicas de nuestros muñecos</h4>
                    <p>Conoce las historias detrás de nuestros muñecos y cómo cada uno puede convertirse en el mejor
                        compañero de aventuras.</p>
                    <a href="historias.html" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>

            <article class="entrada">
                <div class="entrada__imagen">
                    <picture>
                        <!-- <source loading="lazy" srcset="img/peluche3.webp" type="image/webp"> -->
                        <img loading="lazy" src="img/Multimedia (11).jpeg" alt="imagen de peluche">
                    </picture>
                </div>
                <div class="entrada__contenido">
                    <h4 class="no-margin">Ideas de regalos con nuestras Michalinas </h4>
                    <p>Explora nuestras recomendaciones de regalos con muñecos artesanales para todas las edades y
                        ocasiones especiales.</p>
                    <a href="productos.html" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>
        </main>

        <aside class="sidebar">
            <h3>Nuevos Productos y Ofertas</h3>
            <ul class="productos no-padding">
                <li class="widget-producto">
                    <h4 class="no-margin">Nuestras nuevas tendencias</h4>
                    <!-- <p class="widget-producto__label">Precio:
                        <span class="widget-producto__info">$25.00</span> -->
                    </p>
                    <a href="productos.html" class="boton boton--secundario">Ver Producto</a>
                </li>

                <!-- <li class="widget-producto">
                    <h4 class="no-margin">Oso de Peluche Gigante</h4>
                    <p class="widget-producto__label">Precio:
                        <span class="widget-producto__info">$40.00</span>
                    </p>
                    <a href="productos.html" class="boton boton--secundario">Ver Producto</a>
                </li> -->
            </ul>
        </aside>
    </div>

    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.html">
                    <h1 class="logo__nombre no-margin centrar-texto">Blog<span class="logo__bold"> Michalina</span></h1>
                </a>

                <nav class="navegacion">
                    <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>
                    <a href="productos.html" class="navegacion__enlace">Productos</a>
                    <a href="contacto.html" class="navegacion__enlace">Contacto</a>
                </nav>
            </div>

        </div>

    </footer>

    <script src="js/modernizr.js"></script>

    <script>
        const imagenColgante = document.querySelector('.imagen-colgante');

        setTimeout(() => {
            imagenColgante.style.display = 'none';
        }, 10000);
    </script>
</body>

</html>