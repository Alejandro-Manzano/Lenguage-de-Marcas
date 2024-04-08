<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <title>| DAM | - JAVASCRIPT</title>
    <meta name="Title" content="| DAM | - JAVASCRIPT" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Alejandro Manzano" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="../js.css">
    
    <style>

        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 1em;
            line-height: 3em;
            color: #069;
            margin-top: 5px;
            text-align: center;
        }

        p {
            font-size: 1.4em;
            color: #666;
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

        .normal {
            color: #1F1F1F;
        }

        .TerceraEdad {
            color: #D0E81E;
        }
        
    </style>

</head>

<body>

    <main class="bgimg-1 animated fadeIn">

        <nav class="topnav" id="myTopnav">

            <?php include '../menu.php'; ?>
      
        </nav>

        <h1>*El Script debe recoger el valor escrito en la caja y mostrar en un mensaje o escribir en la página el resultado del tipo de abono que corespondería segun: </h1>
        <p>Para Menores de 25 años les corresponde el ABONO JOVEN</p>
        <p>Para Mayores de 65 ABONO TERCERA EDAD</p>
        <p>En cualquier otro caso le corresponde el ABONO NORMAL.</p>
        <p>Controlar los valores negativos de la EDAD.</p>
        <h1>¿Qué tipo de abono le corresponde?</h1>
        <input type="number" name="cedad" id="cedad" value="" onChange="verabono();" autofocus="autofocus" class="zoom">
        <input type="button" value="Confirma tu edad" class="zoomB" name="b" id="b" onClick="verabono();">
        <div id="textoc" name="textoc">
            Te corresponde el abono... 
        </div>

        <footer>Fuente: <a href="#" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>

    </main>

    <script type="text/javascript">

        function verabono() {
            var edad = document.getElementById('cedad').value;
            var abono;
            if (edad <= 0) {

                document.getElementById('textoc').innerHTML = '<img src="img/error.png" style="vertical-align:middle;"><h3 style="color:red;display:inline;"> ¡Estas tont@ o qué !, ' + edad + ' no es correcto ¿demasiada Play?</h3>';
            } else {
                if (edad <= 25) {
                    abono = '<span class="joven">Joven</span>';
                } else
                if (edad >= 65) {
                    abono = '<span class="TerceraEdad">Tercera Edad</span>';
                } else {
                    abono = '<span class="normal">Normal</span>';
                }
                document.getElementById('textoc').innerHTML = "<h3 style='color:green;'>La edad que ha introducido es " + edad + " años.<p /> El abono que le corresponde es " + abono + "</h3>";
            }
        }

    </script>

</body>
</html>
