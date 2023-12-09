<!DOCTYPE html>
<html dir="ltr" lang="es">
  	<head>
		<meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Enlaces HTML</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Página sobre enlaces en HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/03-enlaces.css">
  	</head>

  	<body>

		<header>
	
			<a id="arriba" ></a>
			<h1>ENLACES</h1><br>
			<hr class="hr">
			<p><a href="../htmlCss/02-listas-y-enlaces.php"> << Anterior</a> // <a href="../mainIndex/index.html">Portada</a><p>

			<hr class="hr-one">
			<br>
    		<?php
            	include 'menu.php';
        	?>
			<br>
		</header>

		<main>
	
		<h3 class="italic">Estos son distintos ejemplos de enlaces que se pueden configurar mediante el código.</h3>

		<ol>

	  		<li>
				<h3>Enlace a una posición de una página de mi estructura de carpetass</h3>
				<a href="01-Etiquetado-estructural-y-texto.php" >Sobre los nuevos cromosomas</a>
			</li>

			<li>
				<h3>Enlace a un servidor FTP público con contenidos musicales</h3>
				<a href="ftp://193.43.36.131/Radio/MP3/" target="_blank" title="No te preocupes por el acceso, es anónimo y gratuito"> Música</a>
		
			</li>
			<li>
		  		<h3>Enlace a un fichero XML</h3>
		 		<p><a href="ejemplo-xml.xml" title="Se carga en una nueva ventana" target="_blank">Pulsa para ver la estructura típica de un fichero XML</a>
		  		</p>
			</li>
			<li>
		  		<h3>Necesito un nuevo Televisor, donde?</h3>
		  		<p><a href="https://www.mediamarkt.es/es/product/_tv-led-55-tcl-55p635-lcd-4k-hdr-tv-google-tv-control-por-voz-smart-tv-dolby-audio-hdr10-negro-1537620.html?utm_source=google&utm_medium=cpc&utm_campaign=rt_shopping_generic_nsp_na_MM-ES-S-G-CAT-PLA-PMAX.PH-PROMO-ALL-ALL&gad_source=1&gclid=Cj0KCQiA6vaqBhCbARIsACF9M6nrpozP9J6Ykmx-JDSHTl-RTrYK_IKh_BiNDjrHwgCpNLQemrroVlgaAl3EEALw_wcB&gclsrc=aw.ds" target="_blank">Mira estas oferta</a>
		  		</p>
		  	</li>
			<li>
				<h3>Enlace Interno, pulsa y bajas hasta el final</h3>
				<p class="p"><a href="#abajo">BAJAR</a></p>
				<hr>
			</li>
		</ol>

</main>

<footer>
<p id="abajo"><a href="#arriba">Ir arriba</a></p>
</footer>
</body>

</html>