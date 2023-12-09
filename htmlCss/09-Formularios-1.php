<!DOCTYPE html>
<html dir="ltr" lang="es">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Formulario I</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Formulario en HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/09-Formularios-1.css">

    </head>

    <body>

        <header>
    
            <h1 id="arriba">Formularios - I - Etiquetas universales</h1>
            <hr>

        </header>

        <br>

        <?php
	        include 'menu.php';
	    ?>

        <br>

        <main>

            <div class="header-div">
                <img alt="img-form" class="header-div-img" src="Img/form.jpg">
                <h2 class="strong">Rellena tu perfil</h2>
            </div>

            <form action="mailto:ansufati@fatifati.net" method="post" target="_blank"> <!-- el método get los datos son visibles en la url mientras que con post no -->
                                
                <div class="form-div-one"> <!-- etiqueta para agrupar una parte dentro de un formulario -->

                    <fieldset>
                        
                        <legend>Datos Personales</legend> <!-- legend paar escribir un titulo dentro de la celda -->

                        <label for="Nombre">Nombre</label> <!-- Con el mismo for e id en input puedes clicar el nombre paar activar el formulario -->
                        <p><input id="Nombre" type="text" name="Nombre"  size="40" maxlength="30" placeholder="Nombre"></p> <!-- name identifica el dato en el servidor -->

                        <label for="Apellidos">Apellidos</label>
                        <p><input type="text" id="Apellidos" name="Apellidos"  size="40" maxlength="80" placeholder="Apellidos"></p> <!-- type para ver de que tipo es el input -->

                        <label for="Contraseña"> Contraseña</label>
                        <p><input type="password" id="Contraseña" name="Password"  maxlength="8" placeholder="Máximo 8"></p>

                        <label for="DNI">DNI</label>
                        <p><input type="text" id="DNI" name="DNI" maxlength="9" placeholder="Máximo 9"></p> <!-- maxlenght sirve para escribir un número máximo d caracteres -->

                        <label for="Sexo"><p>Sexo</p></label>

                        <hr>      

                        <input type="radio" name="Sexo" value="Hombre"> Hombre <p>
                        <input type="radio" name="Sexo" value="Mujer">Mujer<div>
                        <input type="radio" name="Sexo" value="Otro"> Otro <br>

                    </fieldset>

                    <fieldset>
                        
                        <legend> Otros Datos</legend>
                                    
                        <label for="Pais">País</label>
                                    
                        <p>
                                        
                            <select name="Nacionalidad" id="Pais">
                                
                                <option value="">-Selecciona un valor-</option> <!-- value es el valor que llega al servidor -->
                                <option value="España">España</option>
                                <option value="Alemania">Alemania</option>
                                <option value="Francia">Francia</option>
                                <option value="Italia">Italia</option>

                            </select>
                                    
                        </p>

                        <h2>Temas de interés</h2>
                        <p>*Puedes seleccionar más de una opción<br>
                        si mantienes pulsada la tecla CTRL</p>
                 
                        <select multiple size="6" id="Intereses" name="Intereses">
                                        
                            <option value="Nuevas tecnologías">Nuevas tecnologías</option>
                            <option value="Deporte">Deporte</option>
                            <option value="Turismo">Turismo</option>
                            <option value="Informática de consumo">Informática de consumo</option>
                            <option value="Decoración">Decoración</option>
                            <option value="Formación">Formación</option>
                            <option value="Oposiciones">Oposiciones</option>
                                    
                        </select>

                            <br><br>

                            <label for="Navegador">Navegador Preferido</label><br><br>

                            <select id="Navegador" name="Navegador">
                                <option value="" disabled selected hidden>Pulsa para Seleccionar</option>
                                <option value="Chrome">Google Chrome</option>
                                <option value="Firefox">Firefox</option>
                                <option value="Safari">Safari</option>
                                <option value="Opera">Opera</option>
                                <option value="Other">Otro</option>
                            </select>
                            
                    
                            <br><br>
                        
                        <label for="Entorno">Entorno de Desarrollo</label><br><br>

                            <select id="Entorno" name="Entorno">

                                <option value="" disabled selected hidden>Pulsa para Seleccionar</option>
                                <option value="Windows" >Windows</option>
                                <option value="Mac" >Mac</option>
                                <option value="Linux" >Linux</option>
                                <option value="Otro">Otro</option>
                       
                            </select>

                    </fieldset> <br><br>

                </div>
       
                <div class="div-send">
                    
                    <div>
                        <input form="Suscribir" name="Suscribir" type="checkbox" value="Si" checked disabled readonly> <!-- checked paar que este maracdo predenterminado -->
                        <label id="Suscribir"> <span class="italic">Suscribirme al boletín de novedades</span></label>
                    </div>

                    <br>

                    <div>
                        <input type="submit" name="enviar datos" value="Enviar Datos">
                        <input class="input-icon" type="image" alt="send" src="img/enviar.png" >
                        <button name="borrar datos"> << Borrar los datos</button>
                    </div>
                </div>        

            </form>


        </main>

        <footer>

            <hr class="hr">
            <a class="subir" href="#arriba">SUBIR</a>

        </footer>

    </body>

</html>