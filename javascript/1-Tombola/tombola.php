<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>| DAM | - JAVASCRIPT</title>
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

    <style>
    #contenido {
        padding: 10px;
    }

    p {
        font-size: 1em;
        color: blue;
        line-height: 1em;
    }

    .zoom {

        width: 80px;
        height: 60px;
        font-size: 40px;
        text-align: center;

    }

    .zoomB {

        width: 340px;
        height: 50px;
        font-size: 35px;
        text-align: center;

    }

    #numero {
        width: 340px;
        margin-right: auto;
        margin-left: auto;
        font-size: 1.5em;
    }

    .fa-2x {
        margin-right: 10px;
    }

    .numero {
        color: blue;
        font-size: 1.3em;
    }

    .recargar {
        cursor: pointer;
        margin-left: 10px;
    }

    .mensaje {
        color: red;
        font-size: 1.2em;
    }

    .TerceraEdad {
        color: #D0E81E;
    }
    </style>
    <script type="text/javascript">
    function premio() {

        document.getElementById("b").disabled = true;
        var numero = Math.floor((Math.random() * 100) + 1);

        //            alert(numero);

        document.getElementById("numero").innerHTML = "Número Obtenido<p><span class='numero'>" + numero +
            "</span></p>";

        if (numero >= 1 && numero <= 50) {

            document.getElementById("premio").innerHTML =
                "<i class='fa fa-window-close fa-2x'></i><span class='mensaje'>Lo sentimos, el número no está premiado</span><img src='https://cdn-icons-png.flaticon.com/512/15/15287.png' width='40px' class='recargar' onclick='recarga ()'>";

        } else
        if (numero > 50 && numero <= 75) {
            document.getElementById("premio").innerHTML =
                "<p><span class='mensaje'>¡ PREMIO: Vuelve a Jugar !</span></p><img src='https://cdn-icons-png.flaticon.com/512/13/13964.png' height='40px' width='40px'>";

            document.getElementById("b").disabled = false;

        } else
        if (numero > 75 && numero <= 90) {
            document.getElementById("premio").innerHTML =
                "<p><span class='mensaje'>¡ PREMIO: Un iPhone 15 PRO MAX 🥳 !</span></p><img src='https://m.media-amazon.com/images/I/71CW36JRavL._AC_UF894,1000_QL80_.jpg' height='40px' width='40px'>"

        } else {
            document.getElementById("premio").innerHTML =
                "<p><span class='mensaje'>¡ PREMIO: Un Bugatti !</span></p><img src='https://cdn.motor1.com/images/mgl/VzMq0z/s3/bugatti-chiron-1500.jpg' width='180px' height='100px'>"
        }
    }
    </script>
    <script src="../funciones.js"></script>
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
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

        </nav>


        <div>
            <div class="caption animated zoomInDown">
                <span class="border">¡Tómbola!</span><br>

                <div id="contenido">

                    <h2>¡Bienvenido a LotOnline!</h2>
                    <h3>Pulsa el botón para obtener un número entre el 1 y el 100 y conocer tu premio</h3>


                    <button class="zoomB" name="b" id="b" onClick="premio();">¡Prueba suerte!</button>

                    <div id="numero" name="numero"></div>


                    <div id="premio" name="premio"></div>

                </div>
            </div>

        </div>
        <footer>Fuente: <a href="https://javascript.solired.es/012-B%20-%20Loteria%20-RESUELTO%20-%20If.html"
                class="enlacepie">Dirección URL de la web donde está el Script</a></footer>
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