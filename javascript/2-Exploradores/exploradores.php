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
    p {
        font-size: 1.4em;
        color: blue;
        margin: 20px;
        line-height: 1.5em;

    }

    #cajita {
        display: inline-block;
        margin-bottom: 12px;
    }

    #navegadorusuario {
        height: 55px;
        width: 300px;
        font-size: 30px;
        text-align: center;
        margin-top: 12px;
        margin-right: 3px;
    }

    #contenedor {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #textoc {
        border: 1px solid #333;
        max-width: 400px;
        margin-top: 10px;
        margin-right: auto;
        margin-bottom: 10px;
        margin-left: auto;
    }

    .mano {
        cursor: pointer;
    }

    #mensaje {
        border: 1px solid #000;
        padding: 10px;
        border-radius: 4px;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        height: 50px;
    }

    .zoom {

        width: 300px;
        height: 60px;
        font-size: 40px;
        text-align: center;

    }

    .zoomB {

        width: 350px;
        height: 60px;
        font-size: 40px;
        text-align: center;

    }

    div>img {

        max-width: 250px;

    }

    @media (max-width: 800px) {
        #contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mano {
            margin-bottom: 10px;
        }
    }
    </style>
    <script>
    function borraCaja() {
        document.getElementById('navegadorusuario').value = '';
        //refrescar();
        document.getElementById('navegadorusuario').focus();
    }

    function navegador() {
        //se definen las variables, y pasamos a minusculas el texto para evitar errores
        //Metodo del Objeto string http://www.w3schools.com/jsref/jsref_obj_string.asp - toLowerCase

        var nav = document.getElementById("navegadorusuario").value;

        var resultado;

        nav = nav.toLowerCase();

        switch (nav) {
            case 'explorer':
                resultado =
                    '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Internet_Explorer_10%2B11_logo.svg/1043px-Internet_Explorer_10%2B11_logo.svg.png" height="100px" width="100px"> ';
                break;
            case 'firefox':
                resultado =
                    '<img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Mozilla_Firefox_3.5_logo.png" height="100px" width="100px">';
                break;
            case 'chrome':
                resultado =
                    '<img src="https://cdn.pixabay.com/photo/2016/04/13/14/27/google-chrome-1326908_960_720.png" height="100px" width="100px">';
                break;
            case 'opera':
                resultado =
                    '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Opera_2015_icon.svg/1200px-Opera_2015_icon.svg.png" height="100px" width="100px">';
                break;
        }
        //sustituimos el valor del div por el resultado

        document.getElementById('textoc').style.color = "red";
        document.getElementById('textoc').style.backgroundColor = "lightgrey";
        document.getElementById('textoc').style.fontSize = "1.6em";
        document.getElementById('textoc').style.padding = "10px";

        document.getElementById('textoc').innerHTML = resultado;

        //Como solo tengo un mensaje de texto que quiero en rojo podría emplear un estilo o directamente javascript.

    }
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
                <span class="border">Navegadores</span><br>
                <!--                <span class="border">-->

                <div id="contenido">

                    <h1>¿Que navegador utilizas habitualmente (Explorer, Firefox, Opera, explorer)?</h1>
                    <p>Escribe tu opción en la caja inferior para obtener su logotipo</p>
                    <h1>Navegador</h1>

                    <div id="contenedor">
                        <form id="cajita">
                            <select id="navegadorusuario" onchange="navegador();">
                                <option>explorer</option>
                                <option>firefox</option>
                                <option>chrome</option>
                                <option>opera</option>
                            </select>
                        </form>

                        <i class="fa fa-refresh fa-spin fa-3x fa-fw mano" onClick="borraCaja();"></i>
                        <input type="button" value="Mostrar logotipo" id="bres" name="bres" class="zoomB mano"
                            onClick="navegador();">
                    </div>
                    <br>
                    <div id="textoc">

                    </div>

                    <!--                </span>-->
                </div>

            </div>
            <footer>Fuente: <a href="https://javascript.solired.es/015-Navegadores-Switch-RESUELTO.html"
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