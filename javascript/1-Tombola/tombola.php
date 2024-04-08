<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <title>Tómbola</title>
    <link rel="icon" type="image/png" href="../js.webp" sizes="16x16"/>
    <meta name="Title" content="Tómbola" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Alejandro Manzano" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="../js.css">
    <link rel="stylesheet" href="styles.css">
    <script src="tombola.js" defer></script>
</head>

<body>

    <nav class="topnav" id="myTopnav">
        <?php include '../menu.php'; ?>
    </nav>

    <main class="bgimg-1 animated fadeIn">

        <article>

            <h1>¡Bienvenido a LotOnline!</h1>
            <h2>Pulsa el botón para obtener un número entre el 1 y el 100 y conocer tu premio</h2>
            <button  class="zoomB mano" name="b" id="b" onClick="premio();">¡Prueba suerte!</button>
            <div id="numero" name="numero"></div> 
            <div id="premio" name="premio"></div>

        </article>

        <footer>Fuente: <a href="#" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>

    </main>
    
</body>

</html>
