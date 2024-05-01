<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>XML</title>
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

    <style type="text/css">
    body {
        height: 1200px;
    }

    #contenido {
        width: 700px;
        height: 900px;
    }

    #contenedor {
        margin-top: 20px;
        margin-right: auto;
        margin-bottom: 10px;
        margin-left: auto;
        font-family: 'Quattrocento Sans', sans-serif;
    }

    #contenedor #contenido2 {
        width: 630px;
        border: none;
        position: relative;
        text-align: center;
        margin-top: auto;
        margin-right: auto;
        margin-bottom: auto;
        margin-left: auto;
    }

    #resultado2 {
        position: absolute;
        top: 200px;
        left: 2px;
        width: 623px;
        height: 600px;
        z-index: 0;
        border: 2px solid #F63;
        overflow: auto;
        text-align: left;
        font-size: 1.1em;
    }

    #contenedor #contenido button {
        color: #F63;
    }

    table {
        width: 100%;
        border-collapse: collapse
    }

    th,
    td {
        text-align: center;
        padding: 8px;
        width: 100px;
    }

    /* Estilos adicionales para las filas */
    tr:nth-child(odd) {
        background: #c07e62;
        color: #FFFFFF;
    }

    tr:nth-child(even) {
        background: #d6d6d6;
        color: #000000;
    }

    tr.neutral {
        background: #373333;
        color: #faf9f9;
    }

    #nota {
        position: absolute;
        left: 36px;
        top: -13px;
        width: auto;
        height: 154px;
        z-index: 1;
    }
    </style>


</head>
<script>
function cargaXML() {

    var conexion;
    var txt, x, i;

    if (window.XMLHttpRequest) {
        conexion = new XMLHttpRequest();
    } else {
        conexion = new ActiveXObject("Microsoft.XMLHTTP");
    }

    //Hasta aqui hemos comprobado el objeto segun el navegador y creado una instalncia en la variable conexion


    conexion.onreadystatechange = function() {
        if (conexion.readyState == 4 && conexion.status == 200)
        //Recibido y preparado el server==4, todo ok ==200
        {
            var xmlDoc = conexion.responseXML;

            //empleamos un responseXML en lugar de un responseText y lo almacenamos en la variable

            var txt = "<table>";
            //Creamos una variable txt que la definimos como "<table>";

            //A partir de aqui definimos las variables que necesitemos para almacenar el contenido de cada una de las etiquetas XML
            //y que recogemos con TagName solo de las etiquetas que tienen valor a mostrar

            //Además, para que le bucle sea más sencillo de tratar en lugar de definir la variable titulo, la hemos reacondicionado por x

            nombre = xmlDoc.getElementsByTagName("nombre");
            tipo = xmlDoc.getElementsByTagName("tipo");
            superr = xmlDoc.getElementsByTagName("superr");
            gadget = xmlDoc.getElementsByTagName("gadget");

            //Creamos el bucle en el que incluimos la tabla (variable txt) y pintamos línea a línea el primer nodo de cada índice del array que representan los elementos en el XML


            for (i = 0; i < nombre.length; i++) {
                txt = txt + "<tr><td>" + nombre[i].childNodes[0].nodeValue + "</td><td>" + tipo[i].childNodes[0]
                    .nodeValue + "</td><td>" + superr[i].childNodes[0].nodeValue + "</td><td>" + gadget[i]
                    .childNodes[0].nodeValue + "</td></tr>";
            }
            document.getElementById("resultado2").innerHTML = txt;
        }
    }

    txt = txt + '</table>'

    //Añadimos la apertura de la conexión y la enviamos

    conexion.open("GET", "personajes.xml", true);
    conexion.send();


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

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">Lectura de XML con ajax</span><br>

                <div id="contenido">

                    <div id="contenedor">
                        <div id="contenido2">


                            <h2>Personajes Brawl Stars</h2>

                            <button type="button" onclick="cargaXML()">Cargar Listado</button>
                            <br /><br /><br />

                            <table class="neutral">
                                <tr class="neutral">
                                    <th>Personaje</th>
                                    <th>Clase</th>
                                    <th>Super</th>
                                    <th>Gadget</th>
                                </tr>

                            </table>

                            <div id="resultado2"></div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <footer>Fuente: <a href="https://javascript.solired.es/051-AJAX/3-micoleccion.html" class="enlacepie">Dirección
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