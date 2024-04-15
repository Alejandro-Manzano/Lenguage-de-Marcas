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
        font-family: 'Segoe UI';
        max-width: 400px;
        height: auto;
        padding: 20px;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #000;
        text-align: center;
        border-radius: 10px;
        color: black;
    }

    #reset {
        border: 1px solid #000;
        padding: 5px 10px 5px 10px;
        cursor: pointer;
        background-color: red;
        color: white;
        border-radius: 10px;
    }

    #chocolatito {
        width: 50%;
        margin-top: 20px;
        margin-right: auto;
        margin-bottom: 10px;
        margin-left: auto;
    }

    div>img {

        width: 150px;

    }
    </style>
    <script>
    function calcula() {

        var posicion = document.getElementById('tipo').options.selectedIndex;
        //Un simple alert nos da la posicion del seleccionado en el desplegable
        //alert (posicion)
        //Mediante la propiedad options[posicion] obtenemos el texto
        //alert(document.getElementById('tipo').options[posicion].text); 
        //var tipo_choco=	document.getElementById('tipo').options[posicion].text;


        var calorias = 0;

        switch (posicion) {
            case 0:
                //alert ('primer choco');
                limpito();
                //alert (calorias);
                break;

            case 1:
                //alert ('segundo choco');
                var calorias = 560;
                resultado = '<img src="negro_amargo.jpg"> ';
                //alert (calorias);
                break;

            case 2:
                //alert ('tercer choco');
                var calorias = 520;
                resultado = '<img src="chocolate_taza.jpg"> ';
                //alert (calorias);
                break;

            case 3:
                //alert ('cuarto choco');
                var calorias = 540;
                resultado = '<img src="chocolate_leche.jpg"> ';
                //alert (calorias);
                break;

            case 4:
                //alert ('quinto choco');
                var calorias = 570;
                resultado = '<img src="chocolate_blanco.jpg"> ';
                //alert (calorias);
                break;
            case 5:
                //alert ('quinto choco');
                var calorias = 70;
                resultado = '<img src="chocolate_light.jpg"> ';
                //alert (calorias);
                break;

            default:
                alert('ninguno seleccionado');
                break;
        }

        var cantidad = document.getElementById('gramos').value;
        if (isNaN(cantidad)) {

            alert('tienes que poner una cantidad de gramos');

            //document.form1.gramos.focus();
            document.getElementById("gramos").value = "";
            document.getElementById("gramos").focus();
            return false;
        }


        var total = (calorias * cantidad) / 1000;
        document.getElementById('Kcal').value = total;

        document.getElementById('chocolatito').innerHTML = resultado;


    }

    function limpito() {
        document.getElementById("Kcal").value = "";
        document.getElementById("gramos").value = "100";
        document.getElementById("tipo").value = "";
        document.getElementById('chocolatito').innerHTML = "";
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
        <div id="contenido">
            <form id="form1" name="form1" method="post" action="">
                <h3>¿Cuantas Kilocalorías hay en?</h3>
                <p>Cantidad (en gramos)
                    <label for="gramos"></label>
                    <input name="gramos" type="text" id="gramos" value="100" size="8" onChange="calcula();">
                </p>
                <p>
                    <label for="tipo">Tipo de Chocolate</label>
                    <select name="tipo" id="tipo" onChange="calcula();">
                        <option value="">Selecciona un tipo</option>
                        <option value="Negro_Amargo">Negro Amargo</option>
                        <option value="Chocolate de Taza">Chocolate de Taza</option>
                        <option value="Chocolate_con_leche">Chocolate con leche</option>
                        <option value="Chocolate Blanco">Chocolate Blanco</option>
                        <option value="Chocolate Light">Chocolate Light</option>
                    </select>
                </p>
                <p>Total calorias (en Kcal)
                    <label for="Kcal"></label>
                    <input name="Kcal" type="text" id="Kcal" onfocus="calcula();" onclick="calcula();"
                        onBlur="limpito();" size="6" readonly>Kcal
                </p>
                <buttom id="reset" ONCLICK="limpito();">RESET</buttom>
                <br>
                <div id="chocolatito"></div>
            </form>
        </div>

        <footer>Fuente: <a href="https://javascript.solired.es/047%20-%20PROPUESTOS/24-Calcula-Calorias-Chocolate.html"
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