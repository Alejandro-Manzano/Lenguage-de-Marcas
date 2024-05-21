<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>jQuery</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="fotorama.css" rel="stylesheet">
    <script src="fotorama.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#tabs").tabs();
    });
    </script>
    <style>
    body {
        height: 1650px;
    }

    #contenido {
        background-color: lightgrey;
        padding-top: 35px;
        width: 800px;

    }

    #texto {
        text-align: left;
    }

    #centrar {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 35px;
    }
    </style>
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
        <nav class="topnav" id="myTopnav">


            <!-- <i class="fa fa-home x2" aria-hidden="true"></i> -->

            <b><a href="../index.html">GLOBAL</a></b>

            <a href="../index.html">Inicio</a>

            <div class="dropdown">

                <button class="dropbtn">Técnicos
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../0-Abono/abono.php">Abono Transporte</a>
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

        <!--A partir de aqui el contenido-->

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">Jquery</span><br>
                <!--                <span class="border">-->

                <div id="contenido">

                    <div id="centrar">
                        <div class="fotorama" data-width="700" data-ratio="700/467" data-max-width="100%"
                            data-autoplay="3000" data-nav="thumbs">
                            <img src="img/1.jpg">
                            <img src="img/2.jpg">
                            <img src="img/3.jpg">
                            <img src="img/4.jpg">
                            <img src="img/5.jpg">
                            <img src="img/6.jpg">
                            <img src="img/7.jpg">
                            <img src="img/8.jpg">
                            <img src="img/9.jpg">
                            <img src="img/10.jpg">
                            <img src="img/11.jpg">
                        </div>
                    </div>
                    <div id="tabs">
                        <ul>
                            <li><a href="#tabs-1">Descripción</a></li>
                            <li><a href="#tabs-2">Video</a></li>
                        </ul>
                        <div id="tabs-1">
                            <div id="texto">
                                <p>Las ciudades, también conocidas como metrópolis o urbes, son asentamientos humanos de
                                    gran tamaño y densidad de población que se caracterizan por lo siguiente:</p>
                                <p> <b>- Población:</b> Cuentan con habitantes que superan los cientos de miles,
                                    llegando incluso a varios millones en las ciudades más grandes.</p>
                                <p> <b>- Infraestructura:</b> Poseen una infraestructura avanzada con sistemas de
                                    transporte público, redes de carreteras, edificios altos y modernos, y servicios
                                    públicos eficientes.</p>
                                <p> <b>- Economía:</b> Son centros económicos que generan gran parte del PIB de un país,
                                    albergando sedes de grandes empresas, bancos y mercados financieros.</p>
                                <p> <b>- Cultura:</b> Ofrecen una gran diversidad cultural con museos, teatros, galerías
                                    de arte, festivales y una vibrante vida nocturna. Son lugares donde se fusionan
                                    diferentes culturas y tradiciones.</p>
                                <p> <b>- Educación:</b> Albergan prestigiosas universidades, centros de investigación y
                                    colegios de alto nivel, atrayendo a estudiantes de todas partes del mundo.</p>
                                <p> <b>- Innovación:</b> Son focos de innovación tecnológica y desarrollo, con parques
                                    tecnológicos y empresas emergentes (startups) que impulsan nuevos avances y
                                    tendencias.</p>
                                <p> <b>- Turismo:</b> Son destinos turísticos populares debido a sus monumentos
                                    históricos, arquitectura icónica, y una amplia oferta de actividades y lugares de
                                    interés.</p>
                                <p>Algunas de las ciudades más reconocidas en el mundo son Nueva York, Londres, Tokio,
                                    París y Dubái.</p>
                            </div>
                        </div>
                        <div id="tabs-2">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/r7086iAv50Q?si=Y2Rfqf7cONAT_sOS"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <footer>Fuente: <a href="https://fotorama.io/#3df9ac37-4e86-49e5-9095-28679ab37718" class="enlacepie">Dirección
                URL de la web donde esté el Script</a></footer>
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