<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
    <meta name="language" content="es" /><!--IDIOMA  --> 
    <title>Etiquetado estructural</title>
    <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
    <meta name="description" content="Página sobre el etiquetado estructural" />
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
    <meta name="distribution" content="global" />
    <meta name="author" content="Alejandro Manzano" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../htmlCss/Css/01-Etiquetado-estructural-y-texto.css">
    <link rel="stylesheet" href="../htmlCss/Css/reset.css">

</head>
<body>

    <header>

        <h1>Mas cerca de la vida artificial</h1>
        <h2>Crean el primer cromosoma artificial</h2>

        <hr>
        <br>
        <?php
            include 'menu.php';
        ?>
        <br>
    </header>

    <main>

       <div>

            <p>David Shukman</p>
            <p>Editor de ciencias <span class="span-main">BBC</span></p>

       </div>

       <hr>
       <h3>Un equipo internacional de investigadores fabrica el primer cromosoma sintético de un organismo vivo complejo</h3>
       <p>Ya se había conseguido diseñar <span class="adn">ADN </span>sintético para organismos más simples, como bacterias.</p>
       <p>Pero la levadura, como una forma de vida cuyas células contienen un núcleo, está relacionada con plantas y animales y comparte <span class="genes">2000 genes</span> con nosotros.</p>
       <p>Por eso la creación del primero de los 16 cromosomas de la levadura es un enorme avance en el novedoso y emergente campo de la ciencia conocido como biología sintética.</p>

       <pre>Los genes en el cromosoma original fueron reemplazados   
                con versiones sinteticas y luego el cromosoma fabricado          
                por el nombre fue integrado con el exito de una celula de levadura</pre>
       
        <p>Los científicos esperaron a que la célula se reprodujera, superando así una prueba esencial de viabilidad.</p>
        <p>La levadura es especialmente preferida en estas investigaciones por su uso establecido en industrias clave como elaboración de cerveza o de pan y por su potencial para futuras aplicaciones industriales.</p>

        
        <p class="p-one">Una compañia en California, Estados Unidos, ya ha usado biologíaa sintética para crear una cepa de levadura que puede producir <span class="span-main-p">artemisa</span> <span class="span-main-p-two">artemisinina</span>, ingrediente de un fármaco contra la <br> malaria.</p>
        <p class="p-two">El equipo internacional ha conseguido sintetizar el cromosoma III de la levadura empleada para fabricar pan (los cromosomas de la levadura se designan normalmente con números romanos), y sus resultados se publican en la revista <span class="science">Science.</span></p>
       
       <q class="p-three">En un futuro podemos diseñar elementos vivos</q>


    </main>

    <footer>

        <p class="footer-p">Copyright 2020</p>

    </footer>
    
</body>
</html>