<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>LightBox</title>
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
    <link rel="stylesheet" href="dist/css/lightbox.css">
    <style>
    section {
        padding: 10px;
    }
    </style>
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
        <nav class="topnav" id="myTopnav">


            <!-- <i class="fa fa-home x2" aria-hidden="true"></i> -->

            <b><a href="../../index.html">GLOBAL</a></b>

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
                <span class="border">lightbox</span><br>

                <div id="contenido">

                    <section>

                        <div>
                            <a class="example-image-link"
                                href="https://phantom-expansion.unidadeditorial.es/4a6e8abe8cb0f42dbf8bff0ce54e016b/crop/0x0/1590x1060/resize/1200/f/webp/assets/multimedia/imagenes/2023/03/14/16788052121226.jpg"
                                data-lightbox="example-1"><img class="example-image"
                                    src="https://phantom-expansion.unidadeditorial.es/4a6e8abe8cb0f42dbf8bff0ce54e016b/crop/0x0/1590x1060/resize/1200/f/webp/assets/multimedia/imagenes/2023/03/14/16788052121226.jpg"
                                    alt="image-1" style="width: 180px " /></a>
                            <a class="example-image-link"
                                href="https://phantom-marca.unidadeditorial.es/ad728f2d16b4ed70c8f1be7fc9af57ff/resize/828/f/jpg/assets/multimedia/imagenes/2023/05/24/16849500271539.jpg"
                                data-lightbox="example-2" data-title="Optional caption.">
                                <img class="example-image"
                                    src="https://phantom-marca.unidadeditorial.es/ad728f2d16b4ed70c8f1be7fc9af57ff/resize/828/f/jpg/assets/multimedia/imagenes/2023/05/24/16849500271539.jpg"
                                    alt="image-1" style="width: 180px" /></a>
                        </div>

                        <hr />


                        <div>
                            <a class="example-image-link"
                                href="https://estaticos-cdn.prensaiberica.es/clip/c9534f85-2e84-428c-802f-acca219d508c_alta-libre-aspect-ratio_default_0.jpg"
                                data-lightbox="example-set"
                                data-title="Click the right half of the image to move forward."><img
                                    class="example-image"
                                    src="https://estaticos-cdn.prensaiberica.es/clip/c9534f85-2e84-428c-802f-acca219d508c_alta-libre-aspect-ratio_default_0.jpg"
                                    alt="" style="width: 180px" /></a>
                            <a class="example-image-link"
                                href="https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2023/09/09/neymar-celebra-su-79-gol-con-brasil-y-su-record-de-maximo-goleador.jpeg"
                                data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img
                                    class="example-image"
                                    src="https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2023/09/09/neymar-celebra-su-79-gol-con-brasil-y-su-record-de-maximo-goleador.jpeg"
                                    alt="" style="width: 180px" /></a>
                            <a class="example-image-link"
                                href="https://www.psg.fr/media/184662/neymar-jr.jpeg?anchor=center&mode=crop&width=800&height=450&quality=60"
                                data-lightbox="example-set"
                                data-title="The next image in the set is preloaded as you're viewing."><img
                                    class="example-image"
                                    src="https://www.psg.fr/media/184662/neymar-jr.jpeg?anchor=center&mode=crop&width=800&height=450&quality=60"
                                    alt="" style="width: 180px" /></a>
                            <a class="example-image-link"
                                href="https://s1.elespanol.com/2022/06/21/elbernabeu/681942521_235217729_1706x960.jpg"
                                data-lightbox="example-set"
                                data-title="Click anywhere outside the image or the X to the right to close."><img
                                    class="example-image"
                                    src="https://s1.elespanol.com/2022/06/21/elbernabeu/681942521_235217729_1706x960.jpg"
                                    alt="" style="width: 180px" /></a>
                        </div>
                    </section>

                </div>

            </div>

        </div>
        <footer>Fuente: <a
                href="https://www.freecodecamp.org/news/how-to-create-a-lightbox-using-html-css-and-javascript/"
                class="enlacepie">Dirección URL de la web donde esté el
                Script</a></footer>

    </main>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
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