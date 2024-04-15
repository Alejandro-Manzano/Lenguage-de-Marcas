<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>| DAM | - JAVASCRIPT</title>
    <meta name="Title" content="| DAM | - JAVASCRIPT">
    <link rel="icon" type="image/png" href="../js.webp" sizes="16x16" />
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
    body {
        background-image: url("../portada.jpg");
    }

    #contenido {
        max-width: 500px;
        background-color: rgba(228, 229, 238, 0.5);
        /* R,G,B,A */
        text-align: center;
        border-radius: 5px;
        margin: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    h1 {
        color: black;
    }

    p,
    input[type="button"] {
        font-size: 30px;
    }

    #escribir {
        width: 100%;
    }

    input[type="text"] {
        text-align: center;
        border: 1px solid #000;
        height: 50px;
        width: 70%;
        font-size: 1.3em;
        color: black;
        background-color: lightblue;
        border-radius: 5px;
    }

    #boton {
        border: 1px solid #000;
        padding: 5px 10px 5px 10px;
        cursor: pointer;
        color: black;
        font-size: 1.2em;
        background-color: lightgreen;
        border-radius: 5px;
    }

    .resalta {
        font-size: 30px;
        color: black;
    }
    </style>
    <script src="../funciones.js"></script>
    <script>
    function verificar() {
        var a = document.getElementById('caja').value;
        var b = a.toLowerCase();
        var c = a.toUpperCase();
        if (a == b) {
            document.getElementById('texto').innerHTML = 'Tu texto está en <span class="resalta">minúsculas</span>';


        } else if (a == c) {
            document.getElementById('texto').innerHTML = 'Tu texto está en <span class="resalta">MAYÚSCULAS</span>';
        } else {
            document.getElementById('texto').innerHTML =
                'Tu texto contiene<span class="resalta"> MAYÚSCULAS</span> y <span class="resalta">minúsculas</span>';
        }
        document.getElementById('caja').focus();
    }

    function noBoton() {
        document.getElementById('texto').style.display = "none";
    }
    </script>
</head>

<body onLoad="noBoton();>
    <main class=" bgimg-1 animated fadeIn">
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

    <div id="contenido">
        <h1>¿Mayúsculas o minúsculas?</h1>
        <br><br>
        <div id="escribir">
            <input type="text" placeholder="Escribe aquí un texto" id="caja" autofocus="autofocus"
                onchange="verificar();">
        </div>
        <br><br><br>
        <buttom id="boton" onclick="verificar();">Verificar formato del texto</buttom>

        <p id="texto"></p>
    </div>

    <footer>Fuente: <a href="https://javascript.solired.es/047%20-%20PROPUESTOS/04-B-MayusMinus.html"
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