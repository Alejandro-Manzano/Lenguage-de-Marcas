<!DOCTYPE html>
<html dir="ltr" lang="es">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Multimedia</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Página multimedia en HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/13-multimedia.css">

    </head>

    <body>

        <br>
        <div class="div-nav">
        <?php
            include 'menu.php';
        ?>
        </div>

        <br>

        <header>
            <marquee direction="right">              
                <h1 id="arriba">KILL BILL VOLUMEN 1</h1>
            </marquee>
        </header>

        <main>

            <section class="section-one">

                <img src="Multimedia_archivos/killBill.jpg" alt="Killbill-La venganza">

                <article class="article-one">

                    <div class="div-1">

                        <h3>FICHA TÉCNICA</h3>

                        <span>Fecha de estreno:</span> 5 de marzo de 2004 (1h 52min)<br>
                        <span>Dirigida por:</span> Quentin Tarantino<br>
                        <span>Reparto:</span> Uma Thurman, Sonny Chiba, Lucy Liu, más<br>
                        <span>Géneros:</span> Acción, Drama, Suspense<br>
                        <span>País:</span> EE.UU.
                        <br><br>
                        <hr>
                    </div>
                    

                    <div class="div-2">

                        <h3>SINOPSIS</h3>
                        <p>
                            Película no recomendada a menores de 18 años. En plena celebración de
                            su boda, la Novia sufre un ataque brutal que acaba con la vida de muchos de sus 
                            invitados y también del novio. Mamba Negra estaba embarazada y se sumerge en un largo coma que 
                            durará hasta cuatro años. Después de este trance, la Novia se despierta y recuerda lo ocurrido. 
                            Descubre desconsolada que ha perdido a su hijo y con él todo lo que más quería, así que la sed 
                            de venganza contra los responsables de aquella tragedia será infinita.
                        </p>
                        <hr>
                    </div>
                    

                    <div class="div-3">

                        <h3>The Killer Song</h3>

                        <audio controls> <!-- controls sirve para ejecutar los comandos de reproducción -->
                            <!-- Diferentes audios -->
                            <source src="Multimedia_archivos/kill-bill-ringtone.wav" type="audio/wav">
                            <source src="Multimedia_archivos/kill-bill-ringtone.mp3" type="audio/mpeg">
                            <source src="Multimedia_archivos/kill-bill-ringtone.ogg" type="audio/ogg">
                        </audio>

                    </div>

                </article>

            </section>

            <section class="section-two">

                <h2>Kill Bill Vol Trailer Oficial</h2>

                <video  controls poster="img/camaKill.webp"> <!-- necesito video para reproducir y usar los controles, poster para la portada -->
                    <source src="Multimedia_archivos/Kill%20Bill%20Volume%201-OT-video.mp4" type="video/mp4">
                </video>

            </section>

            <form action="mailto:alexmanzanola@gmail.com" enctype="text/plain" method="post" target="_blank">

                <p class="title-form">Formulario de pedido</p>

                <span class="span"></span>

                <label class="name" for="name">Nombre y Apellidos (max 40 caracteres)
                    <input id="name" type="text" name="name" placeholder="Nombre y Apellido" maxlength="40" required>
                </label>

                <label class="email" for="email">Email
                    <input id="email" type="email" name="email" placeholder="tunombre@correo.com" required>
                </label>

                <div class="formato">
                    <label  for="formato-copia">Formato de la copia</label>

                        <select name="formato-copia" id="formato-copia">
                            <option value=""></option>
                            <option value="MKV">MKV</option>
                            <option value="M4V">M4V</option>
                            <option value="AVI">AVI</option>
                        </select>
                </div>

                <div class="edicion">
                    <label for="Edición">Edición</label>

                    <div>
                        <input id="Edición1" name="promocion" type="radio" value="ninguno" checked>
                        <label for="Edición1">Standar (17,99 €)</label><br/>

                        <input id="Edición2" name="promocion" type="radio" value="portes">
                        <label for="Edición2">Coleccionista (24,99 €)</label><br/>

                        <input id="Edición3" name="promocion" type="radio" value="descuento">
                        <label for="Edición3">Coleccionista + (Corte del director) (39,99 €)</label>

                    </div>

                </div>

                <div class="legales">

                    <label for="Condiciones_legales">Acepto las condiciones legalaes</label>
                    <input type="checkbox" id="Condiciones_legales">

                </div>
                
                <input name="enviar datos" class="submit" type="submit" value="Realizar pedido >> ">
            </form>

        </main>

        <br><br><hr class="hr">
        <span class="span-two"></span>

        <footer>
            <p><a href="#arriba"><img alt="flecha arriba" class="img-arriba" src="../htmlcss/Img/arriba.png"> UP!</a></p>
        </footer>
  
    </body>
    
</html>