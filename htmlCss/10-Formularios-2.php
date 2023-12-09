<!DOCTYPE html>
<html dir="ltr" lang="es">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Formulario II</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Formulario en HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/10-Formularios-2.css">

    </head>

    <body>

        <header>
            
            <h1 id="arriba">Subasta Online</h1>
            <hr>
            <br>

        </header>
        
        <br>
        <?php
            include 'menu.php';
        ?>
        <br>
        
        <main>

            <div>

                <img alt="teclado" class="img-subasta" src="img/subasta.webp"><br />
                <h2>Información sobre el producto</h2>

            </div>

            <form action="mailto:ansufati@fatifati.net" method="post" target="_blank">

                <fieldset>

                    <legend>Datos básicos</legend>

                    <label for="nombre">Nombre</label>
                    <br>
                    <input name="nombre" id="nombre" type="text" size="40" placeholder="Nombre y un apellido" maxlength="150">

                    <br/>
                    <br/>

                    <label for="descripcion">Descripción general</label>
                    <br/>
                    <textarea name="descripcion" id="descripcion" rows="7" cols="40"></textarea>

                    <br/><br>

                    Foto  <input name="foto" type="file" value="Examinar">

                    <br/>
                    <br/>

                    <p><input name="contador" type="checkbox" value="si">
                    Añadir contador de visitas</p>

                </fieldset>

                <fieldset>

                    <legend>Datos económicos</legend>

                    <p>

                        <label for="precio">Precio</label>
                        <input name="precio" id="precio" type="text" size="4">
                
                        <label for="impuestos">Impuestos</label>
                        <select name="impuestos" id="impuestos">
                            <option value="4">4%</option>
                            <option value="7">7%</option>
                            <option value="16">16%</option>
                            <option value="25">25%</option>
                        </select>

                        <br/><br>

                        <label>Promoción</label>
                        <br>

                        <input name="promocion" type="radio" value="ninguno">Ninguno<br />
                        <input name="promocion" type="radio" value="portes">Transporte gratuito<br />
                        <input name="promocion" type="radio" value="descuento">Descuento 5%
 
                    </p>

                </fieldset>

                    <input class="input-submit"  type="submit" name="enviar" id="enviar" value="Enviar ✔" >

            </form>
        
        </main>
        <hr>
        <footer>

            <a class="a" href="#arriba"> SUBIR</a>

        </footer>
    
    </body>
        
</html>