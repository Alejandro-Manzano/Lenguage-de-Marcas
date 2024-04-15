<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>| DAM | - JAVASCRIPT</title>
    <meta name="Title" content="| DAM | - JAVASCRIPT">
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente">
    <meta name="keywords"
        content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Parallax, WEB, Accesibilidad">
    <meta name="distribution" content="global">
    <meta name="author" content="Jordi Adrián Jaramillo Aldaz">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--    Animaciones CSS https://daneden.github.io/animate.css/-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">


    <link rel="stylesheet" href="../js.css">

    <!--El menu es de aqui: https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp-->

    <!--Estilos-->
    <style>
    #contenido {
        max-width: 900px;
    }

    #logotipos {
        max-width: 700px;
        width: 100%;
        margin-bottom: 15px;
    }

    table {
        border-radius: 10px;
        width: 300px;
        height: 145px;
        margin: auto;
        margin-bottom: 20px;
        padding: 25px;
        box-shadow: 0px 2px 9px #aaa;
        background: linear-gradient(#f2f2f2, #fff);
        text-align: left;
    }

    .centrado {
        text-align: center;
    }

    h2 {
        text-align: center;
        margin-top: 25px;
        color: #280D7B;
    }

    input {
        width: 50px;
        text-align: right;
        font-size: inherit;
    }

    .resultado {
        font-weight: bold;
        color: #0C3;
        background-color: #EAEAEA;
    }

    .margenizdo {
        padding-left: 20px;
    }

    #apDiv1 {
        position: absolute;
        left: 761px;
        top: 201px;
        width: 289px;
        height: 129px;
        z-index: 1;
    }
    </style>
    <script>
    function calcular() {
        var cartas = parseInt(document.getElementById("cartas").value);
        var paquetes = parseInt(document.getElementById("paquetes").value);
        if (cartas < 0 || paquetes < 0) {
            document.getElementById('mensajeError').innerHTML =
                '<h3 style="color:red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error al introducir los datos, presta atención (mendrugo)!</h3>';
            document.getElementById('cartas').focus;
            document.getElementById('cartas').value = '0';
            document.getElementById('paquetes').focus;
            document.getElementById('paquetes').value = '0';

            noBoton();

        } else { //Si llegamos aqui, oculto error y hacemos cálculos

            document.getElementById('boton').style.display = "block";
            document.getElementById('actualizar').style.display = "block";
            document.getElementById('mensajeError').innerHTML = '';
            var total = cartas + paquetes;
            var pvpSinIva = total * 3;
            var totalIva = (pvpSinIva * 1.21).toFixed(2);
            var iva = (totalIva - pvpSinIva).toFixed(2);

            document.getElementById('mensaje1').innerHTML = total;
            document.getElementById('mensaje2').innerHTML = pvpSinIva + ' €';
            document.getElementById('mensaje3').innerHTML = iva + ' €';
            document.getElementById('mensaje4').innerHTML = totalIva + ' €';
        }
    }

    function noBoton() {

        document.getElementById('boton').style.display = "none";
        document.getElementById('actualizar').style.display = "none";
    }
    </script>
    <script src="../funciones.js"></script>
</head>

<body onLoad="noBoton();">
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
                <span class="border">Mensajeria</span><br>
                <!--                <span class="border">-->

                <div id="contenido">
                    <img id="logotipos" src="pedidos.png">
                    <div id="mensajeError">
                        <h2>Introduce las cartas y paquetes que quieras enviar</h2>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td> Cartas</td>
                                <td align="right">

                                    <input name="cartas" id="cartas" value="0" type="number" min="0" max="1000"
                                        autofocus onchange="calcular();">
                                </td>
                            </tr>
                            <tr>
                                <td>Paquetes</td>
                                <td align="right">
                                    <input name="paquetes" id="paquetes" value="0" onchange="calcular();" type="number"
                                        min="0" max="1000">
                                </td>
                            </tr>
                            <tr>
                                <td class="margenizdo">Total bultos</td>
                                <td align="right" id="mensaje1">0</td>
                            </tr>
                            <tr>
                                <td class="margenizdo">Precio por bulto</td>
                                <td align="right">3€</td>
                            </tr>
                            <tr>
                                <td class="margenizdo">PVP sin IVA</td>
                                <td align="right" id="mensaje2">0</td>
                            </tr>
                            <tr>
                                <td class="margenizdo">IVA 21%</td>
                                <td align="right" id="mensaje3">0</td>
                            </tr>
                            <tr>
                                <td height="45" class="margenizdo"><strong>Total con IVA</strong></td>
                                <td align="right" class="resultado" id="mensaje4">0</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="margenizdo">
                                    <a href="https://www.paypal.com/es/home" target="_blank"><img src="boton-paypal.png"
                                            alt="botón de pago a Paypal" name="boton" id="boton" width="205" height="52"
                                            title="Al pulsar te redireccionamos a la pasarela de pago en Paypal"></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="centrado">
                                    <span id="actualizar"><i class="fa fa-refresh fa-2x fa-fw mano" onClick="recarga()"
                                            ; title="Recargar página y empezar de cero"></i>
                                </td></span>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <footer>Fuente: <a href="https://javascript.solired.es/047%20-%20PROPUESTOS/6-Presupuesto-Mensajeria.html"
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