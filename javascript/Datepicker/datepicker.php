<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>Date Piccker</title>
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="i18n/datepicker-ar.js"></script>
    <script src="i18n/datepicker-fr.js"></script>
    <script src="i18n/datepicker-he.js"></script>
    <script src="i18n/datepicker-es.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.es.js"></script>
    <script src="i18n/datepicker-zh-TW.js"></script>

    <style>
    #contenido {
        padding-left: 10px;
        background-color: blue;
    }

    body {
        margin: 0;
        font-family: Arial;
        background-color: blue;
        background-image: url("../portada.jpg")
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .p {
        background-color: yellow;
        color: green;
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 10px 16px;
        text-decoration: none;
        font-size: 17px;
    }


    .border {
        background-color: blue;
    }

    .active {
        background-color: #4CAF50;
        color: white;
    }

    .topnav .icon {
        display: none;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 17px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .topnav a:hover,
    .dropdown:hover .dropbtn {
        background-color: #555;
        color: white;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
        color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media screen and (max-width: 600px) {

        .topnav a:not(:first-child),
        .dropdown .dropbtn {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

        .topnav.responsive .dropdown {
            float: none;
        }

        .topnav.responsive .dropdown-content {
            position: relative;
        }

        .topnav.responsive .dropdown .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
        }
    }

    /*CSS para la imagen de fondo y los textos centrados estilo etiquetas*/

    body,
    html {
        height: 100%;
        margin: 0;
        font: 400 15px/1.8 "Lato", sans-serif;
        color: #777;

    }

    .bgimg-1 {
        position: relative;
        background: url("../portada2.jpg") no-repeat center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
    }

    .caption {
        /* position: absolute; */
        left: 0;
        top: 10%;
        width: 100%;
        text-align: center;
        color: #000000;
        z-index: -100;
    }

    .caption span.border {
        background-color: #111;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;

        /*Si comentamos la linea inferior las etiquetas de texto quedan juntas, valorar al gusto*/

        line-height: 100px;

    }

    #contenido {
        margin: 0 auto;
        width: 500px;
        background-color: snow;
        border: 1px solid black;
    }

    footer {

        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        background-color: #000000;
        opacity: 0.85;
        padding: 10px;
        color: white;

    }

    /*        Enlaces para el pie*/
    a.enlacepie:link {
        text-decoration: none;
        color: lightpink;
    }

    a.enlacepie:visited {
        text-decoration: none;
        color: lightpink;
    }

    a.enlacepie:hover {
        text-decoration: underline;
        color: lightpink;
    }

    a.enlacepie:active {
        text-decoration: underline;
        color: lightpink;
    }

    .centro {
        /*text-align: center;*/
        display: flex;
        justify-content: center;
    }

    table {
        font-size: 1em;
    }

    .ui-draggable,
    .ui-droppable {
        background-position: top;
    }

    .centro2 {
        display: flex;
        justify-content: center;
    }
    </style>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="i18n/datepicker-ar.js"></script>
    <script src="i18n/datepicker-fr.js"></script>
    <script src="i18n/datepicker-he.js"></script>
    <script src="i18n/datepicker-es.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.es.js"></script>
    <script src="i18n/datepicker-zh-TW.js"></script>

    <!-- NO DESCOMENTAR <script>
        $(function () {
            $("#datepicker").datepicker();
        });
    </script> -->

    <script>
    $(function() {
        $("#datepicker").datepicker($.datepicker.regional["es"]);
        $("#locale").on("change", function() {
            $("#datepicker").datepicker("option",
                $.datepicker.regional[$(this).val()]);
        });
    });

    jQuery(function($) {
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '&#x3C;Ant',
            nextText: 'Sig&#x3E;',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'
            ],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
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

            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

        </nav>

        <!--A partir de aqui el contenido-->

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">DatePicker</span><br>



                <p class="p">Fecha: <input type="text" id="datepicker">&#xA0;
                </p>


            </div>

        </div>
        <footer>Fuente: <a href="https://jqueryui.com/datepicker/#localization" class="enlacepie">Dirección URL de la
                web donde esté el Script</a></footer>
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