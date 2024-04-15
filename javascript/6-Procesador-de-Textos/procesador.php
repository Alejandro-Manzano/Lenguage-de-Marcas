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
    * {

        margin: 0;
        padding: 0;
    }



    body {

        font-family: verdana, arial;
        font-size: 100%;

        background-image: url("../portada.jpg");


    }

    #titulo {

        font-family: arial, sans-serif;
        padding: 20px;
        color: #0699ca;


    }

    img {
        display: inline;
        width: 50px;
        vertical-align: middle;
        margin-right: 10px;
        /*            float: left;*/


    }

    #barraControles {

        background-color: rgba(0, 0, 0, 0.8);
        padding: 20px;

    }

    .borde {

        border: 1px solid black;
        padding: 4px;

    }

    #contTextarea {
        /*            border:1px solid red;*/
        width: 992px;
        margin: auto;
    }

    textarea {
        display: block;
        width: 700px;
        min-height: 350px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
        padding: 10px;
        font-size: 12px;
        border: 0px;

        -webkit-box-shadow: 10px 10px 5px -6px rgba(102, 102, 102, 1);
        -moz-box-shadow: 10px 10px 5px -6px rgba(102, 102, 102, 1);

        box-shadow: 10px 10px 5px -6px rgba(102, 102, 102, 1);

    }
    </style>
    <script type="text/javascript">
    /*Creamos una sola función llamada formato donde declaramos las diferentes variables asociadas a la propiedad que deseamos cambiar  */

    //   Opcion 2: Tendríamos más control creando una funcion para cada caso de formato

    /*Emplearemos para aplicar formato el objeto del DOM expresamente diseñado apra éstas operaciones y que es el objeto Style del DOM http:www.w3schools.com/jsref/dom_obj_style.asp*/

    function formato() {

        //select tamaño texto
        var tam_texto;

        tam_texto = document.getElementById("tamanyo").value;
        document.getElementById("texto").style.fontSize = tam_texto + "px";

        //var tipo_texto;
        var tipo_texto = document.getElementById("tipo").value;
        document.getElementById("texto").style.fontFamily = tipo_texto;

        var color_texto;
        color_texto = document.getElementById("color").value;
        document.getElementById("texto").style.color = color_texto;

        //Select interlineado


        var interlineado;

        interlineado = document.getElementById("interlineado").value;
        document.getElementById("texto").style.lineHeight = interlineado;

        var negrita;
        negrita = document.getElementById("negrita").checked;
        if (negrita == true) {
            document.getElementById("texto").style.fontWeight = "bold";
        } else {
            document.getElementById("texto").style.fontWeight = "normal";
        }

        var cursiva;
        cursiva = document.getElementById("cursiva").checked;
        if (cursiva == true) {
            document.getElementById("texto").style.fontStyle = "italic";
        } else {
            document.getElementById("texto").style.fontStyle = "normal";
        }

        var subrayado;
        subrayado = document.getElementById("subrayado").checked;
        if (subrayado == true) {
            document.getElementById("texto").style.textDecoration = "underline";
        } else {
            document.getElementById("texto").style.textDecoration = "none";
        }

        var alineacion;
        if (document.getElementById("izquierda").checked == true)
            alineacion = "left";
        if (document.getElementById("derecha").checked == true)
            alineacion = "right";
        if (document.getElementById("centro").checked == true)
            alineacion = "center";
        if (document.getElementById("justificado").checked == true)
            alineacion = "justify";

        document.getElementById("texto").style.textAlign = alineacion;
    }
    //-->
    </script>

    <!-- Finalmente si deseamos que se cargen los valores por defecto de las propiedades al cargar la página, en el evento onLoad del Body llamamos a la función formato(): -->

</head>

<body>

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

    <h2>
        <div id="titulo"><img src="https://cdn-icons-png.flaticon.com/512/5047/5047146.png">Maquetador de Texto.</div>
    </h2>
    <hr>
    <div id="barraControles">
        <div id="controles">Tamaño del texto
            <select id="tamanyo" onChange="formato();">
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12" selected>12</option>
                <option value="14">14</option>
                <option value="16">16</option>
                <option value="20">20</option>
            </select>

            Tipo de texto
            <select id="tipo" onChange="formato()">
                <option value="arial" selected>arial</option>
                <option value="verdana">verdana</option>
                <option value="geneva">geneva</option>
                <option value="georgia">georgia</option>
            </select>

            Color del texto
            <select id="color" onChange="formato()">
                <option value="#000000" selected>negro</option>
                <option value="#CCCCCC">gris</option>
                <option value="#6699FF">azul</option>
            </select>

            Interlineado
            <select id="interlineado" onChange="formato()">
                <option value="0.5">0.5</option>
                <option value="1" selected>1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>

            </select>

        </div><br />
        <div id="controles2">
            Negrita&nbsp;
            <input name="negrita" type="checkbox" value="negrita" id="negrita"
                onClick="formato()">&nbsp;&nbsp;&nbsp;&nbsp;
            Cursiva&nbsp;
            <input type="checkbox" name="cursiva" value="checkbox" id="cursiva"
                onClick="formato()">&nbsp;&nbsp;&nbsp;&nbsp;Subrayado&nbsp;
            <input type="checkbox" name="subrayado" value="checkbox" id="subrayado" onClick="formato()">
            &nbsp;&nbsp;&nbsp;&nbsp;

            <label for="Alineación">Alineación</label>
            &nbsp;
            <span class="borde">
                <input name="a" type="radio" value="si" id="izquierda" onClick="formato()">&nbsp;Izq&nbsp;
                <input name="a" type="radio" value="si" id="derecha" onClick="formato()">&nbsp;Dch&nbsp;
                <input name="a" type="radio" value="si" id="centro" onClick="formato()">&nbsp;Cen&nbsp;
                <input name="a" type="radio" id="justificado" onClick="formato()" value="si">
                &nbsp;Justificada&nbsp;
            </span>
        </div>

    </div>
    <!-- Como veis en cada elemento de formulario llamamos a la función que ahora vamos a configurar, onchange="formato()" para los menús deplegables y onclick="formato()" para las casillas de verificación y radiobotones -->

    <!-- Ahora creamos la capa que contendrá el texto a formatear -->
    <hr>
    <div id="contTextarea">
        <textarea id="texto" placeholder="Escribe tu texto aqui..." autofocus></textarea>
    </div>
    <footer>Fuente: <a href="https://javascript.solired.es/047%20-%20PROPUESTOS/24-Calcula-Calorias-Chocolate.html"
            class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
</body>

</html>