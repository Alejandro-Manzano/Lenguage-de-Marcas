<!DOCTYPE html>
<html dir="ltr" lang="es">

    <head>
    
        <link rel="stylesheet" href="../htmlCss/Css/reset.css">
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Torrente I</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Página multimedia en HTML sobre la película Torrente" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@600&family=Rubik+Bubbles&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../htmlCss/Css/ExT1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
    </head>

    <body>

        <br>
        <div class="div-nav" id="arriba">
        <?php
            include 'menu.php';
        ?>
        </div>

        <br>

        <header>           
                <h1 class="animate__animated animate__bounce">Torrente el brazo tonto de la ley</h1>
        </header>

        <main>

            <section class="section-one">

                <img class="poster-torrente" src="../htmlCss/Img/poster-torrente.jpeg" alt="Poster torrente">

                <article class="article-one">

                    <div class="div-1">

                        <h3>FICHA TÉCNICA</h3>

                        <span class="strong">Fecha de estreno:</span> 13 de marzo de 1998 (1h 37m)<br>
                        <span class="strong">Dirigida por:</span> Santiago Segura<br>
                        <span class="strong">Reparto:</span> Santiago Seguro, Javier Cámara, Neus Asensi, más<br>
                        <span class="strong">Géneros:</span> Comedia, Acción<br>
                        <span class="strong">País:</span> España.
                        <br><br>
                        <hr>
                    </div>
                    

                    <div class="div-2">

                        <i class="bi bi-info-circle-fill"></i><h3>SINOPSIS</h3>
                        <p>
                            Torrente es la personificación de todos los tópicos sobre los policías de antaño. 
                            Es un desastre como hombre y muy desagradable, pues a su inutilidad como policía suma que es homófobo, 
                            machista, racista y además un cerdo.Vive en un barrio marginal en el cual tiene como vecinos a Rafi, a su 
                            prima y a su madre. Rafi es un chico con muy pocas luces, aficionado a las películas de acción y a las armas, 
                            que admira a Torrente porque sabe que es policía. Torrente no quiere saber nada de él en un principio, pero lo
                            usa para acercarse a su prima, una ninfómana con la que se quiere acostar. Sin embargo, poco a poco va apreciando 
                            a Rafi, todo lo que un ser despreciable como Torrente puede apreciar a alguien, y ambos terminan patrullando la ciudad 
                            por las noches, como si Rafi fuera un policía de verdad, lo que traerá muchos problemas a Torrente.
                        </p>
                        <hr>
                    </div>
                    

                    <div class="div-3">

                        <h3>Apatrullando la ciudad</h3>

                        <audio controls> <!-- controls sirve para ejecutar los comandos de reproducción -->
                            <!-- Diferentes audios -->
                            
                            <source src="../htmlCss/Img/Multimedia_archivos/el_fary_apatrullando_la_ciudad.mp3" type="audio/mpeg">
                           
                        </audio>

                    </div>

                </article>

            </section>

            <section class="section-two">

                <h2>Trailer Torrente 1</h2>

                <video  controls poster="../htmlCss/Img/torrente-img-trailer.webp"> <!-- necesito video para reproducir y usar los controles, poster para la portada -->
                    <source src="../htmlCss/Img/Multimedia_archivos/trailer-torrente.mov" type="video/mp4">
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
            <p><a href="#arriba"><img alt="flecha" class="img-arriba" src="../htmlcss/Img/arriba.png"> UP!</a></p>
        </footer>
  
    </body>
    
</html>