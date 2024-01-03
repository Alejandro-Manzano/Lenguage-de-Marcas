<!DOCTYPE html>
<html dir="ltr" lang="es">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /> 
        <title>Formulario III</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Formulario en HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/11-Formularios-3.css">
        <link rel="stylesheet" href="../htmlCss/Css/reset.css">

    </head>

    <body>

        <header>
        
            <h1 id="arriba">Formulario 3</h1>
            <hr>

        </header>
        
        <br>
        <?php
            include 'menu.php';
        ?>
        <br>

        <main>

            <form class="form-1" action="google.com" method="post" target="_blank">
      
                <label for="Buscar">Buscar en google</label>
                <input id="Buscar" type="search" name="Búsqueda-Google" placeholder="Escribe el término de busqueda" autofocus>
                <input type="submit" value="Buscar en Google >>">

            </form>

            <form class="form-2" action="amazom.com" method="post" target="_blank">

                <input type="search" name="Búsqueda-Amazon" placeholder="Buscar en Amazon" >
                <input type="submit" value="Buscar en Amazón >>">

            </form>

            <form action="mailto:ansufati@fatifati.es" method="post" target="_blank">

                <div class="display">
                    <img alt="tazas" class="tazas" src="../htmlCss/Img/taza.webp">

                <fieldset class="fieldset">

                    <legend>Elige la cantidad y color de tu taza</legend>

                    <h3>Actualmente en existencias</h3>

                    <meter value="7" min="0" max="10"></meter>
                    <br>

                    <p>**Máximo 10 unidades por pedido</p>
                    <br>

                    <label for="tazas-?">Cantidad de tazas</label>
                    <input id="tazas-?" type="number" name="cantidad-de-tazas" min="1" max="10" required >
                    <br><br>
     
                    <label for="color">Selecciona el color</label>
                    <input id="color" type="color" name="color" value="#FF000D">
                    <br><br>

                    <label for="rango">¿Cuanto te gusta?</label>
                    <input id="rango" type="range" min="0" max="5" value="2.5" step="0.5" onChange="number.value=value;" > <!-- onChange --> <!-- código JS --> <!-- se enlaza con el output por su id -->
                    <output id="number">2.5</output>
                    <br><br>

                </fieldset>
                </div>
 
                <br>

                <fieldset>

                    <legend>Datos de envío y facturación</legend>
                    
                    <p>*Campos obligatorios</p>

                    <label for="nombre">*Nombre </label>
                    <input type="text" id="nombre" name="Nombre" maxlength="30" placeholder="Máximo 30 caractéres" required>

                    <label for="dirección">*Dirección de entrega</label>
                    <input id="dirección" type="text" name="Direccion" placeholder="Dirección obligatoria/ Max. 80 caracteres" maxlength="80" required>

                    <br><br>

                    <label for="día">Día de entrega</label>
                    <input id="día" type="date" min="2020-01-01" max="2020-01-30" name="Dia entrega">

                    <label for="hora">Hora de entrega (Entre las 8:00 - 17:00)</label>
                    <input id="hora" type="time" min="8:00:00" max="17:00:00" name="Hora de entrega">

                    <br><br>
             
                    <label for="email">*Email de contacto</label>
                    <input id="email" type="email" name="email" placeholder="tunombre@correo.net" required>

                    <label for="telefono">Teléfono</label>
                    <input id="telefono" type="text" name="tfno" placeholder="123456789" value="(+34)" maxlength="14">
              
                </fieldset>

                <fieldset>

                    <legend><h2>Tarjeta de crédito</h2></legend>

                    <label for="tarjeta-de-credito">*Número de Tarjeta</label>
                    <input id="tarjeta-de-credito" type="text" required>

                    <br><br>

                    <label for="fecha-de-caducidad">*Fecha caducidad </label>
                    <input id="fecha-de-caducidad" type="month" name="fecha-de-caducidad" requiered>
           
                    <br><br>

                    <label for="codigo-de-seguridad">Security Code  </label>
                    <input type="numer" name="codigo-de-seguridad" id="codigo-de-seguridad" requiered placeholder="nº posterior">
          
                    <br><br>

                </fieldset>

                <br><br>

                <button type="submit">Finalizar pedido >></button>

            </form>

            <br><br>
   
        </main>
        
        <hr>

        <footer>

            <p class="arriba" ><a href="#arriba"><img alt="flecha" src="img/Arriba.png" class="subir-img">SUBIR</a></p>

        </footer>
        
    </body>

</html>