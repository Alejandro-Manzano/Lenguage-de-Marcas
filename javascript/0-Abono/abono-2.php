
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <title> JavaScript: abono con caja de formulario </title>

    <link rel="shortcut icon" type="image/ico" href="../../imagenes/favicon.ico">

    <style type="text/css">
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


    <!-- Si se hace de esta forma el script se "carga" la pagina actual y crea una nueva -->
    <!-- <script language="JavaScript" type="text/JavaScript"> 				
			var edad = cedad.value;
			var abono;
			
			function verabono(){
			if(edad<0){
				//document.write("<h3>Introduzca una edad válida, " + edad +" no es correcto</h3>");
			}
			else{ 
				if(edad<=18){
					abono = "Joven";
				}
				else if(edad>=65){
					abono = "Tercera Edad";
				}
				else{	
					abono = "Normal";
				}
				document.write("<h3>La edad que ha introducido es " + edad + " años.<br /> El abono que le corresponde es " + abono + "</h3>");
			}
			
		</script> -->


    <!-- Forma de hacer el script para que aparezca debajo de la caja de texto sin emplear document.write -->

    <script type="text/javascript">
        function verabono() {
            var edad = document.getElementById('cedad').value;
            var abono;
            //con document.getElementById('textoc').innerHTML conseguimos sobrescribir el ID que le indicamos, incluso podemos modificar sus atributos
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

                //Esta es una forma de cambiar el color del div

                //var antiguotexto = document.getElementById('textoc').innerHTML;
                //var nuevotexto = "<span style='color:black'>" + antiguotexto + "</span>";
                //document.getElementById('textoc').innerHTML = nuevotexto;
            }

        }

    </script>
</head>

<body>

    <h1>*El Script debe recoger el valor escrito en la caja y mostrar en un mensaje o escribir en la página el resultado del tipo de abono que corespondería segun: </h1>
    <p>Para Menores de 25 años les corresponde el ABONO JOVEN</p>
    <p>Para Mayores de 65 ABONO TERCERA EDAD</p>
    <p>En cualquier otro caso le corresponde el ABONO NORMAL.</p>
    <p>Controlar los valores negativos de la EDAD.</p>

    <h1>¿Qué tipo de abono le corresponde?</h1>


    <input type="number" name="cedad" id="cedad" value="" onChange="verabono();" autofocus="autofocus" class="zoom">

    <input type="button" value="Confirma tu edad" class="zoomB" name="b" id="b" onClick="verabono();">

    <div id="textoc" name="textoc">Te corresponde el abono... </div>


</body>

</html>
