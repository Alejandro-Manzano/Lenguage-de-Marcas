<!DOCTYPE html>
<html dir="ltr" lang="es">

    <head>
    
    <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Iframes</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Iframes en HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/12-Iframes.css">
        <link rel="stylesheet" href="../htmlCss/Css/reset.css">

    </head>

    <body>

        <header>
    
            <h1 class="h1" id="arriba">Iframes</h1>
            <hr>
            
        </header>

        <br>

                <?php
                include 'menu.php';
                ?>

        <br>

        <main>
		
            <h2>Página sobre iframes, realizada con HTML, PHP y XAMPP como servidor web</h2>
            <p>Codificado con VS Code // <a href="https://code.visualstudio.com/download" target="_blank">Descargalo pinchando aquí</a></p> 
                
            <section>

                <article>

                        <div>
                            <h3>Periódico Marca</h3>
				            <iframe src="https://www.marca.com/"></iframe>
                        </div>
                        <div>
                            <h3>Tablas HTML</h3>
			                <iframe src="07-tablas-1.php"></iframe> <!-- Ocupa el 100% del ancho de la mitad de la tabla -->
                        </div>

                </article>

                <article>

                        <div>
                            <h3>Una dirección de google Maps</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12141.68734040212!2d-3.6339712000000004!3d40.465931850000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd423099686eabff%3A0x5f27c87ab2c1f005!2sPalacio%20de%20Hielo!5e0!3m2!1ses!2ses!4v1700824047867!5m2!1ses!2ses" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div>
                            <h3>Haikudeck "Startup Pitch"</h2>
                            <iframe src="https://www.haikudeck.com/e/82c964ff8c/?isUrlHashEnabled=false&isPreviewEnabled=false&isHeaderVisible=false" ></iframe><br/>
                        </div>

                </article>

                <article>

                        <div>
                            <h3>Vídeo Youtube</h2>
                            <iframe  src="https://www.youtube.com/embed/RbyZWgA-_9g?si=c4BCV1Gy5Lb3I7vz" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h3>Manual de Java</h3>
                            <iframe src="https://www.manualweb.net/java/" ></iframe>
                        </div>

                </article>

            </section> 

        </main>

        <hr>

        <footer>

            <p class="p"><a href="#arriba"><img alt="flecha" class="img" src="img/Arriba.png">SUBIR</a></p>

        </footer>

    </body>
	
</html>