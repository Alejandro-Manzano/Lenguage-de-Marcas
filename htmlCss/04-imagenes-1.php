<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
		<meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Imágenes 1</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Página sobre imágenes en HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/04-imagenes-1.css">
</head>

<body>


<header>

    <h1 id="arriba">Sobre las imágenes</h1>
   
	<hr>
	<br>
	<?php
            include 'menu.php';
        ?>
	<br>
</header>
	
	<main>
		
		<p>La etiqueta fundamental para insertar una imágen en una página web es <<span class="img">img</span>>. </p>
		<img class="imgGimp" src="img/captura.jpg" alt="Captura de pantalla"> <br>

			<p>Sin embargo sólo con la etiqueta no es suficiente, necesitamos insertar los atributos básicos que me van a permitir<br> 
                "conectar" con la imágen en sí y mostrar cierta información relativa a la imágen en el caso de que la imágen no se cargue o<br> por cuestiones de accesibilidad.</p>

		<h3>Dichos atributos fundamentales son:</h3>

		<ul>
			<li><span class="strong">SRC</span>="Ruta a la imágen"</li>
			<li><span class="strong">ALT</span>="Descripción de la imágen"</li>
			<li><span class="strong">WIDTH</span>="Ancho de la imágen en px o %"</li>
			<li><span class="strong">HEIGHT</span>="Altura de la imágen en px o %"</li>
		</ul>

		<p>Por lo tanto una etiqueta básica completa para insertar la captura que te muestro a continuación quedaría asi:</p>

		<h3><span><</span> src="captura.jpg" alt="captura de pantalla de mi web favorita:www.miweb.es"<span>></span></h3>

		<div class="main-img-container">

            <img class="main-img-container-img" src="Img/bombillas-inteligentes.jpg" alt="bombilla" >
            <div>
                <p class="p-div">Otros atributos muy utilizados pero no recomendados a día de hoy para la<br> maquetación (mejor con css), pero que todavía se ven en código de manera<br> frecuente son:</p>
		        <ul>
			        <li><b>HSPACE</b>="Define un margen horizontal, por ambos lados de la imágen""</li>
			        <li><b>VSPACE</b>="Define un margen horizontal, por ambos lados de la imágen"</li>
			        <li><b>ALIGN</b>="Alineación de la imágen", éste atributo admite varios valores pero <br> los más comunes son <b>left</b> y <b>right</b></li>
		        </ul>
            </div>

        </div>

		<p class="p-description">
			Sin embargo para alinear la imagen la etiqueta imágen debe estar en el código por delante de la primera letra de la<br> 
			primera línea del párrafo u objeto al que se quiere alinear, es decir, la etiqueta que yo he empleado para la imágen de<br> 
			la bombilla es la siguiente:
		</p>
		
		<p class="strong strong-unique"> <span><</span> img src="/bombilla.jpg" width="300" height="189" alt="" align="left" hspace="20"<span>></span></p>
		<hr class="hr" />
		<p class="arriba"><a href="#arriba">SUBIR</a></p>
	</main>
</body>

</html>