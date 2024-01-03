<!DOCTYPE html>
<html dir="ltr" lang="es">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" /><!--IDIOMA  --> 
        <title>Listas y enlaces</title>
        <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
        <meta name="description" content="Página sobre listas y enlaces" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Alejandro Manzano" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htmlCss/Css/02-listas-y-enlaces.css">
        <link rel="stylesheet" href="../htmlCss/Css/reset.css">

    </head>

    <body>

    <header>

        <h1>Lista anidadas y enlaces</h1>
        <hr>
        <br>
        
        <?php
            include 'menu.php';
        ?> 
        <br>
    </header>

    <main>

       <h2>Menú de contenidos</h2>

       <ul>

            <li><p class="strong">Inicio</p></li>
        
            <li>
                <p class="strong">Entorno de cliente</p>
            
                <ul>

                    <li><a href="01-Etiquetado-estructural-y-texto.php" title="Mi primera página web">Mi primera página en HTML</a></li>
                    <li><a href="Img/altavoz.png">Pulsa para ver una imagen de mis carpetas</a></li>
                    <li><a href="https://www.fcbarcelona.com/fcbarcelona/photo/2022/08/02/ae5252d1-b79b-4950-9e34-6e67fac09bb0/LeoMessi20092010_pic_fcb-arsenal62.jpg" target="_blank">Una imagen que no está en mis carpetas</a></li>

                </ul>
        
            </li>

            <li>
            
                <p class="strong">Tipos de documentos habituales</p>
        
                <ol>
                    <li>Word: *.doc o *.docx</li>
                    <li>Excel: *.xls o *.xlxs</li>
                    <li>PowerPoint: *.ppt o *.pptxS</li>
                    <li>Comprimidos: *.zip o *.rar</li>
                    <li><a href="https://www.turnerlibros.com/wp-content/uploads/2021/02/ejemplo.pdf">PDF</a>: *.pdf</li>
                </ol>
        
            </li>

            <li>  
                <p class="strong">Contacto</p>

                <div class="p-div">

                <p class="p italic">Email</p>
                <p class="p left">
                    <a href="mailto:ansufati@fatifati67.com?subject=Asunto del correo&amp;body=Cuerpo del correo">
                        ansufati@fatifati67.com
                    </a>
                </p>
                
                <p class="p italic">Teléfono</p>
                <p class="p left">900900900</p>
                <p class="p italic">Fax</p>
                <p class="p left">900900900</p>

                </div>
                

        </li>


       </ul>

    </main>

    <footer>

        <hr class="border">

    </footer>

    
</body>
</html>