<!DOCTYPE html>
<html dir="ltr" lang="es">

    <head>
    
			<meta charset="utf-8">
            <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
            <meta name="language" content="es" /> 
            <title>Tablas II</title>
            <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
            <meta name="description" content="Ejercicio de tablas en HTML" />
            <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
            <meta name="distribution" content="global" />
            <meta name="author" content="Alejandro Manzano" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../htmlCss/Css/08-tablas-2.css">
			<link rel="stylesheet" href="../htmlCss/Css/reset.css">

    </head>

    <body>

	    <header>

	        <h1 id="arriba">Tablas II</h1>
	        <hr>
			<br>
        </header>
		<br>
        <?php
	    include 'menu.php';
	    ?>
		<br>
        <main>

            <p>Dos atributos bastante utilizados en las tablas son <span class="strong">rowspan</span> y <span class="strong">colspan</span>, ambos nos permiten fusionar celdas para conseguir tablas más complejas:</p>
			
            <ul>
			    <li><p><span class="strong">Tabla con dos columnas simples fusionadas,</span> empleando <span class="italic strong">colspan</span></p></li>
			</ul>

            <table>

		        <tr>
			        <td colspan="2">Las Dos Columnas Fusionadas</td>
		        </tr>
		        <tr>
			    	<td>Celda normal</td>
			        <td>Celda Normal</td>
		        </tr>

	        </table>

	        <ul>
	            <li><p><span class="strong">Tabla con dos filas simples fusionadas,</span> empleando <span class="italic strong">rowspan</span></p></li>
	        </ul>

	        <table class="table-margin">

		        <tr>
			        <td>Celda Normal</td>
			        <td rowspan="2">Las dos filas Fusionadas</td>
		        </tr>
                    
		        <tr>
			        <td>Celda Normal</td>
		        </tr>

	        </table>

            <h2 class="strong">COMPARATIVA DE REPRODUCTORES MP3</h2>

	        <table>

	            <caption>Tabla comparativa de las características técnicas de los reproductores MP3</caption>

	            <tr>
		            <th></th>
		            <th colspan="3"> 
                        <img class="blanco-p" src="Img/mp3-blanco.jpg" alt="MP3 blanco"/><img class="negro-p" src="Img/mp3_negro.png" alt="MP3 negro"/><br/>
		                <span class="strong">MP3 mini</span> 
                    </th>
		            <th colspan="2">
                        <img class="blanco-g"  src="Img/mp3-blanco.jpg" alt="MP3 blanco"/><img class="negro-g"  src="Img/mp3_negro.png" alt="MP3 negro"/><br>
                        <span class="strong">MP3 grande</span> 
                    </th>
	            </tr>

	                <tr>
		                <th>Capacidad de almacenamiento</th>
		                <td>4GB <br/>(1.000 canciones)</td>
		                <td>8GB <br/> (2.000 canciones)</td>
		                <td>16GB <br/>(4.000 canciones)</td>
                        <td>30GB <br/>(7.500 canciones)</td>
		                <td>80GB <br/>(20.000 canciones)</td>
	                </tr>

	                <tr>
		                <th>Opinion de los usuarios</th>
		                <td><img src="img/feliz.png" class="cara" alt="cara feliz"></td>
		                <td><img src="img/feliz.png" class="cara" alt="cara feliz"></td>
		                <td><img src="img/triste.webp" class="cara" alt="cara triste"></td>
		                <td><img src="img/feliz.png" class="cara" alt="cara feliz"></td>
		                <td><img src="img/triste.webp" class="cara" alt="cara triste"></td>
	                </tr>

	                <tr>
		                <th>Pantalla</th>
		                <td colspan="3">LCD de 3 cm (diagonal) con retroiluminación</td>
		                <td colspan="2">LCD de 6 cm (diagonal) con retroiluminación</td>
	                </tr>

	                <tr>
		                <th rowspan="2">Tiempo de carga</th>
		                <td rowspan="2" colspan="3">Unas 3 horas</td>
		                <td colspan="2">Unas 4 horas</td>
	                </tr>

	                <tr>
		                <td colspan="2">Unas 2 horas para alcanzar el 80% de la capacidad</td>
	                </tr>

	        </table>

        </main>

        <hr>

        <footer>

            <p class="subir"><a href="#arriba"><img src="img/Arriba.png" class="img-subir" >SUBIR</a></p>
	
        </footer>

    </body>

</html>