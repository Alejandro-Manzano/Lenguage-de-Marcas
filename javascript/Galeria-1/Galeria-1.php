<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>Galería 1</title>
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
    <link rel="stylesheet" href="jquery.jqzoom.css" type="text/css">
    <script src="jquery-1.6.js" type="text/javascript"></script>
    <script src="jquery.jqzoom-core.js" type="text/javascript"></script>

    <!--El menu es de aqui: https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp-->

    <!--Estilos-->
    <style>
    #contenido {
        width: 680px;
    }

    a img,
    :link img,
    :visited img {
        border: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    :focus {
        outline: none;
    }

    p,
    blockquote,
    dd,
    dt {
        margin: 0 0 8px 0;
        line-height: 1.5em;
    }

    fieldset {
        padding: 0px;
        padding-left: 7px;
        padding-right: 7px;
        padding-bottom: 7px;
    }

    fieldset legend {
        margin-left: 15px;
        padding-left: 3px;
        padding-right: 3px;
        color: #333;
    }

    dl dd {
        margin: 0px;
    }

    dl dt {}

    .clearfix:after {
        clear: both;
        content: ".";
        display: block;
        font-size: 0;
        height: 0;
        line-height: 0;
        visibility: hidden;
    }

    .clearfix {
        display: block;
        zoom: 1;
    }

    ul#thumblist {
        display: block;
    }

    ul#thumblist li {
        float: left;
        margin-right: 2px;
        list-style: none;
    }

    ul#thumblist li a {
        display: block;
        border: 1px solid #CCC;
    }

    ul#thumblist li a.zoomThumbActive {
        border: 1px solid red;
    }

    .jqzoom {
        text-decoration: none;
        float: left;
    }
    </style>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens: true,
            preloadImages: false,
            alwaysOn: true
        });


    });
    </script>
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
                    <a href="../Galeria-2/Galeria-2.php">Modelo 2</a>
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
                <span class="border">Galeria, modelo 1</span><br>
                <!--                <span class="border">-->

                <div id="contenido">

                    <div class="clearfix" id="content" style="margin-left:30px; height:500px;width:500px;">
                        <div class="clearfix">
                            <a href="triumph_big1.jpg" class="jqzoom" rel='gal1' title="triumph">
                                <img src="triumph_small1.jpg" title="triumph" style="border: 4px solid #666;">
                            </a>
                        </div>
                        <br />
                        <div class="clearfix">
                            <ul id="thumblist" class="clearfix">
                                <li><a class="zoomThumbActive" href='javascript:void(0);'
                                        rel="{gallery: 'gal1', smallimage: 'triumph_small1.jpg',largeimage: 'triumph_big1.jpg'}"><img
                                            src='triumph_thumb1.jpg'></a></li>
                                <li><a href='javascript:void(0);'
                                        rel="{gallery: 'gal1', smallimage: 'triumph_small2.jpg',largeimage: 'triumph_big2.jpg'}"><img
                                            src='triumph_thumb2.jpg'></a></li>
                                <li><a href='javascript:void(0);'
                                        rel="{gallery: 'gal1', smallimage: 'triumph_small3.jpg',largeimage: 'triumph_big3.jpg'}"><img
                                            src='triumph_thumb3.jpg'></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!--                </span>-->
            </div>

        </div>
        <footer>Fuente: <a href="https://www.jqueryscript.net/zoom/Image-Inner-Zoom-Magnifier-Plugin-JQZoom.html"
                class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
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