<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>Galería 2</title>
    <link rel="icon" type="image/png" href="../js.webp" sizes="16x16" />
    <meta name="Title" content="| DAM | - JAVASCRIPT">
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente">
    <meta name="keywords"
        content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Parallax, WEB, Accesibilidad">
    <meta name="distribution" content="global">
    <meta name="author" content="Alejandro Manzano">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">


    <link rel="stylesheet" href="../js.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

    <style>
    body {
        height: 1000px;
    }

    #contenido {
        width: 670px;
    }

    .zooma-main {
        overflow: hidden;
        position: relative;
        max-width: 500px;
        max-height: 500px;
    }

    .zooma-main img {
        pointer-events: none;
        display: block;
        width: 100%;
        height: auto;
        cursor: zoom-in;
        opacity: 0;
        top: 0;
        left: 0;
    }

    .zooma-main img.is-loaded {
        position: absolute;
    }

    .zooma-main img.is-active {
        opacity: 1;
        pointer-events: initial;
    }

    .zooma-main img.is-zoomed-in {
        cursor: zoom-out;
        width: initial;
    }

    .zooma-thumbnail img {
        display: block;
        width: 80px;
        height: auto;
        opacity: 0.5;
        padding: 10px;
    }

    .zooma-thumbnail img.is-active {
        opacity: 1;
        outline: 1px solid;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    .wrapper {
        width: 1200px;
        margin: 0 auto;
    }

    .product {
        display: flex;
        flex-flow: row;
        align-items: center;
    }

    .product__thumbnails {
        flex-shrink: 0;
    }

    .product__focus {
        margin: 0 40px;
    }

    .product__description {
        width: 30%;
    }
    </style>
    <script>
    $(document).ready(function() {
        // Store initial image size
        function setImageSize() {
            var imageSize = Math.floor($('.zooma-main img:first-child').height());
            if (imageSize <= 0) {
                requestAnimationFrame(setImageSize);
            } else {
                $('.zooma-main').css({
                    width: imageSize,
                    height: imageSize
                });
                $('.zooma-main img').addClass('is-loaded');
            }
        }

        requestAnimationFrame(setImageSize);



        // Populate thumbnails
        $('.zooma-main').children().clone().appendTo('.zooma-thumbnail');

        // Set state for first image
        $('.product img:first-child').addClass('is-active');

        // Thumbnail hover event listener
        $('.zooma-thumbnail img').on('mouseenter', function() {
            $('.product img').removeClass('is-active is-zoomed-in').prop('style', '').off('mousemove');
            $('.product img:nth-child(' + ($(this).index() + 1) + ')').addClass('is-active');
        });

        // Main image click to zoom event listener
        $('.zooma-main img').on('click', function(e) {
            // Toggle zoom-out cursor and unset max-width
            $(this).toggleClass('is-zoomed-in');

            // Zoom in
            if ($(this).hasClass('is-zoomed-in')) {
                // Variables for calculating relative position
                var scale = e.target.naturalWidth / $(e.target).parent().width();
                var max = -(1 - 1 / scale);

                // Adjust mouse scale to the full-size image, then redraw
                e.offsetX *= scale;
                e.offsetY *= scale;
                calculateZoom(e);

                // Mouse event listener
                $(this).on('mousemove', calculateZoom);

                function calculateZoom(e) {
                    var x = e.offsetX * max + 'px';
                    var y = e.offsetY * max + 'px';
                    $(e.target).css({
                        left: x,
                        top: y
                    });
                }
            }
            // Zoom out
            else {
                $(this).off('mousemove').prop('style', '');
            }
        });
    });
    </script>
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
        <nav class="topnav" id="myTopnav">

            <b><a href="../../index.html">GLOBAL</a></b>

            <a href="../index.html">Inicio</a>

            <div class="dropdown">

                <button class="dropbtn">Técnicos
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../0-Abono/abono.php">Abono transporte</a>
                    <a href="../1-Tombola/tombola.php">¡Tombola!</a>
                    <a href="../2-Exploradores/exploradores.php">Exploradores</a>
                    <a href="../3-Mensajeria/mensajeria.php">Mensajería</a>
                    <a href="../4-Texto/texto.php">Mayus/Minus</a>
                    <a href="../5-Chocolate/chocolate.php">Chocolate</a>
                    <a href="../6-Procesador-de-Textos/procesador.php">Procesador de Textos</a>
                    <a href="../7-ALAX-LecturaTxT/ajax-txt.php">AJAX-Txt</a>
                    <a href="../8-LecturaXML/ajax-xml.php">Ajax & Xml</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Box
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../LightBox/lightbox.php">LightBox</a>
                    <a href="../ShadowBox/shadowbox.php">ShadowBox</a>

                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Sliders
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Slider-1/slider-1.php">Modelo 1</a>
                    <a href="../Slider-2/slider-2.php">Modelo 2</a>

                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Galerías
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Galeria-1/Galeria-1.php">Modelo 1</a>
                    <a href="../Galeria-2/Galeria-2.html">Modelo 2</a>

                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Tiempo
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Reloj/reloj.php">Reloj</a>
                    <a href="../Datepicker/datepicker.php">DatePicker</a>
                    <a href="../CountDown/countdown.php">CountDown</a>
                </div>
            </div>

            <a href="../parallax/parallax.php">Parallax</a>
            <a href="../jquery/jquery.php">JQuery</a>
            <!--
<div class="dropdown">
            <button class="dropbtn">Juegos
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="game-1.html">Game - I</a>
                <a href="game-2.html">Game - II</a>
                
            </div>
        </div>
-->

            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">Galeria, modelo 2</span><br>

                <div id="contenido">
                    <div class="product wrapper">
                        <div class="product__thumbnails zooma-thumbnail"></div>
                        <div class="product__focus zooma-main">
                            <img src="https://picsum.photos/1000" />
                            <img src="https://picsum.photos/1050" />
                            <img src="https://picsum.photos/1100" />
                            <img src="https://picsum.photos/1200" />
                            <img src="https://picsum.photos/1250" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>Fuente: <a href="https://codepen.io/sdvim/pen/GdegZd" class="enlacepie">Dirección URL de la web donde
                esté el Script</a></footer>
    </main>
    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>

</body>

</html>