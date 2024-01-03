<!DOCTYPE html>

    <html dir="ltr" lang="es">
    <head>
    <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Imágenes 2</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Página sobre imágenes en HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/05-imagenes-2.css">
       

        
    </head>

    <body>

	    <header>
		    <h1 id="arriba">Imágenes y enlaces</h1>
           
		    <hr>
            
	    </header>
        <br>
        <?php
            include 'menu.php';
        ?>
        <br>
        <main>
        
            <p>Las imágenes es bastante común encontrarlas relacionadas con la etiqueta de los enlaces para provocar dos comportamientos muy extendidos. Estos son dos fundamentalmente:</p>
                
            <div class="main-div">
                <a href="https://www.google.es/" target="_blank">
                    <img class="google" src="img/google.jpg" alt="Logotipo de Google" title="Pulsa para ir a la página de Google">
                </a>

                <div class="div-container">
                    <h3 class="div-container-p">Imagen cómo máscara del enlace </h3>
                    <p><span><</span> a href="http://www.google.es"; target="_blank";><span><</span> img src="imagen.jpg"; alt="foto"<span>></span>< </ </span>a<span>></span> </p>
                </div>
            </div>
                        
                <h3>Imagen que conecta con otra imagen (generalmente ampliada) </h3>
        
                <p class="italic">< a href=imagen_gran.jpg target=_blank img src=imagen_pq.jpg ></p>
                <div class="imgs">
                    <a href="Img/lego-1.jpg" target="_blank"><img class="lego one" src="Img/lego-1.jpg"  alt="lego"  title="pulsa para ampliar la imágen"></a>
                    <a href="Img/lego-2.jpg" target="_blank"><img class="lego" src="Img/lego-2.jpeg"  alt="lego" title="Pulsa para ampliar la imágen"></a>
                </div>

                <br>

                <p>
                    También es bastante común la necesidad de dejar trasparentes algunas partes de la imágen con el objetivo de respetar las imágenes o colores de fondo que hallamos puesto para toda la página web. 
                    Las imágenes con zonas transparentes estan en formato<span class="strong"> *.gif </span>o <span class="strong">*.png</span> que son los que conservan dicha particularidad si creas zonas transparentes en las imágenes y las guardas en formato
                     *.jpg te seguiran apareciendo con fondo blanco.
                </p>

                <div class="img-container">
                    <div>
                        <p class="p-em">Imagen sin transparencia </p>
                        <img class="google-img"  src="img/google_noPNG.jpeg" alt="google">
                    </div>
                    <div>
                        <p class="p-em">Imagen con transparencia</p>
                        <img class="google-img" src="img/google_PNG.webp" alt="google-transparente">
                    </div>
                </div>
        
        
                <p>
                    Para crear zonas trasnparentes en una imágen necesitas alguna aplicación que te permita seleccionar sobre la imágen el color 
                    a transparentar y una vez realizada la operación guardarla en el formato adecuado. Evidentemente para apreciar el efecto
                    es necesario disponer de al menos algún color de fondo para la página, y que en ésta ocasión y dado que no hemos visto CSS,
                    lo haremos directamente agregando el atriuto bgcolor = #RRGGBB en la etiqueta body
                </p>
        
                <div class="gif-container">
                    <img src="img/Rotating_earth_(large).gif" alt="GIF">

                    <div>
                        <p class="strong strong-p">También es posible la creación de efectos e imágenes animadas con multitud de herramientas online, prueba a crear alguno con algunas de éstas aplicaciones online:</p>
                        <ul class="ul">
                            <li><a href="http://www.online-image-editor.com/" target="_blank">http://www.online-image-editor.com/</a></li>
                            <li><a href="http://picasion.com/es/" target="_blank">http://picasion.com/es/</a></li>
                            <li><a href="https://www.photopea.com/" target="_blank">Para el tratamiento de imágenes online (Photopea)</a></li>
                          </ul>
                    </div>
                </div>

                <br><br> 
                            
                <hr/>
        
        </main>
        
        <footer>

            <p class="right"><a href="#arriba"><img alt="arriba" class="arriba" src="Img/flechaa.png"></a></p>

        </footer>

    </body>
        
</html>