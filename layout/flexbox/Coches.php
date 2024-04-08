<!DOCTYPE html>
<html lang="es">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="porsche.ico" sizes="16x16"/>
        <meta name="language" content="es" />
        <title>Coches</title>
        <meta name="Title" content= "DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Coches" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manznao" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="normalize.css"> 
        <link rel="stylesheet" href="Coches.css">

        <style>
            <?php include '../menucss.css';?> 
        </style>

    </head>

    <?php include '../../layout/menucss.php';?> 

    <body>

       <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Porsche_hood_emblem.png/457px-Porsche_hood_emblem.png?20170204060946" alt="porsche-logo" class="logo">
            <h1>Modelos 2023/24</h1>
        </header> 

        <main>

                <div>
                    <img src="https://configurator.porsche.com/model-start/pictures/911/extcam03.webp" alt="911" class="car">
                    <p>911</p>
                    <a class="a" href="">Más información</a>
                </div>
                <div>
                    <img src="https://configurator.porsche.com/model-start/pictures/taycan/extcam03.webp" alt="taycan" class="car">
                    <p>Taycan</p>
                    <a class="a" href="">Más información</a>
                </div>
                <div>
                    <img src="https://configurator.porsche.com/model-start/pictures/macan/extcam03.webp" alt="macan" class="car">
                    <p>Macan</p>
                    <a class="a" href="">Más información</a>
                </div>
                <div>
                    <img src="https://configurator.porsche.com/model-start/pictures/panamera/extcam03.webp" alt="panamera" class="car">
                    <p>Panamera</p>
                    <a class="a" href="">Más información</a>
                </div>

        </main>

        <footer> 
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Porsche_hood_emblem.png/457px-Porsche_hood_emblem.png?20170204060946" alt="porsche-logo" class="logofooter">
            <ul>
                <li><a class="white" href="#">Porsche de un vistazo</a></li>
                <li><a class="white" href="#">Porsche Ibérica</a></li>
                <li><a class="white" href="#">Empleo</a></li>
                <li><a class="white" href="#">Contacto</a></li>
                
            </ul>
        </footer>

    </body>

</html>