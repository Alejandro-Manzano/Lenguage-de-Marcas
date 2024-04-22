<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>DatePicker</title>
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
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(function() {
        var dateFormat = "mm/dd/yy",
            from = $("#from")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
            .on("change", function() {
                to.datepicker("option", "minDate", getDate(this));
            }),
            to = $("#to").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
            .on("change", function() {
                from.datepicker("option", "maxDate", getDate(this));
            });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
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
        <section>
            <label for="from">From</label>
            <input type="text" id="from" name="from">
            <label for="to">to</label>
            <input type="text" id="to" name="to">
        </section>

</body>

</html>