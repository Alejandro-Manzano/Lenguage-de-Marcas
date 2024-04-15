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

        width: 350px;
        height: 60px;
        font-size: 40px;
        text-align: center;

    }

    #textoc {
        border: 1px solid #333;
        width: 50%;
        margin-right: auto;
        margin-left: auto;
        margin-top: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .joven {
        color: #F00;
    }

    input {
        height: 100px;
        width: 120px;
    }

    .normal {
        color: #1F1F1F;
    }

    .TerceraEdad {
        color: #D0E81E;
    }
    </style>
    <script type="text/javascript">
    function verabono() {
        var edad = document.getElementById('cedad').value;
        var abono;
        //con document.getElementById('textoc').innerHTML conseguimos sobrescribir el ID que le indicamos, incluso podemos modificar sus atributos
        if (edad <= 0) {

            document.getElementById('textoc').innerHTML =
                '<img src="https://www.freeiconspng.com/thumbs/error-icon/error-icon-4.png" height=50px style="vertical-align:middle;"><h3 style="color:red;display:inline;"> ¡Estas tont@ o qué !, ' +
                edad + ' no es correcto ¿demasiada Play?</h3>';
        } else {
            if (edad <= 25) {
                abono = '<span class="joven">Joven</span>';
            } else
            if (edad >= 65) {
                abono = '<span class="TerceraEdad">Tercera Edad</span>';
            } else {
                abono = '<span class="normal">Normal</span>';
            }
            document.getElementById('textoc').innerHTML = "<h3 style='color:green;'>La edad que ha introducido es " +
                edad + " años.<p /> El abono que le corresponde es " + abono + "</h3>";

        }

    }
    </script>
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
        <nav class="topnav" id="myTopnav">
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

        <!--A partir de aqui el contenido-->

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">Abono transporte</span><br>
                <!--                <span class="border">-->

                <div id="contenido">

                    <h2>*El Script debe recoger el valor escrito en la caja y mostrar en un mensaje o escribir en la
                        página el resultado del tipo de abono que corespondería segun: </h2>
                    <p>Para Menores de 25 años les corresponde el ABONO JOVEN</p>
                    <p>Para Mayores de 65 ABONO TERCERA EDAD</p>
                    <p>En cualquier otro caso le corresponde el ABONO NORMAL.</p>
                    <p>Controlar los valores negativos de la EDAD.</p>

                    <h3>¿Qué tipo de abono le corresponde?</h3>


                    <input type="number" name="cedad" id="cedad" value="" onChange="verabono();" autofocus="autofocus"
                        class="zoom" max="125" min="0">

                    <input type="button" value="Confirma tu edad" class="zoomB" name="b" id="b" onClick="verabono();">

                    <div id="textoc" name="textoc">Te corresponde el abono... </div>



                </div>

                <!--                </span>-->
            </div>

        </div>
        <footer>Fuente: <a href="https://javascript.solired.es/012-Abono-RESUELTO%20-%20If.html"
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