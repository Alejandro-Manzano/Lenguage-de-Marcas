<!DOCTYPE html>

    <html dir="ltr" lang="es">

        <head>
            <meta charset="utf-8">
            <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
            <meta name="language" content="es" /> 
            <title>Mapa de imágenes</title>
            <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
            <meta name="description" content="Mapa de imágenes en HTML" />
            <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
            <meta name="distribution" content="global" />
            <meta name="author" content="Alejandro Manzano" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../htmlCss/Css/06-mapa-de-imagenes.css">
        </head>

        <body>

            <header>

                <h1 id="arriba">Mapa de imágenes</h1>

            </header>

            <hr>
            <br>
                <?php
                    include 'menu.php';
                ?>
                <br>
	
	        <main>
		
                <div class="webcam-container">
                    <img class="img" src="../htmlCss/Img/Mapa-img/cam.png" alt="webcam">
                    <div class="text-container">
                        <h2 class="strong">WEBCAM VIEWER</h2>
			            <p>Desplázate sobre el Mapa para conectar con la webcam de la zona en cuestión, las cámaras se abrirán en nuevas<br> pestañas.</p>
                    </div>
                </div>
                        
                <img class="img-2" src="../htmlCss/Img/Mapa-img/mapa.png" alt="Descripción de la imagen" usemap="#mapa">

                <map id="imgmap20231280556" name="mapa">
                    <area shape="rect" alt="Playa de Gijón" title="" coords="342,2,389,46" href="https://www.webcamsdeasturias.com/asturias/centro/gijon/gijon/la-escalerona-playa-de-san-lorenzo-hd/148/" target="_blank" />
                    <area shape="rect" alt="Playa de Barcelona" title="" coords="797,141,840,182" href="https://www.skylinewebcams.com/es/webcam/espana/cataluna/barcelona/playa-barceloneta.html" target="_blank" />
                    <area shape="rect" alt="Playa de Alicante" title="" coords="646,329,692,370" href="https://www.skylinewebcams.com/es/webcam/espana/comunidad-valenciana/alicante/alicante-playa-almadraba.html" target="_blank" />
                    <area shape="rect" alt="Playa de Málaga" title="" coords="415,422,463,465" href="https://meteo365.es/livecams/malaga-misericordia.php" target="_blank" />
                </map>
                        
	        </main>

            <hr>
            
	        <footer>

		        <p class="p-footer"><a href="#arriba">SUBIR</a></p>

	        </footer>

        </body>

    </html>