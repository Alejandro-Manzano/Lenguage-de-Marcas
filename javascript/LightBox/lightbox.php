<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es">
    <title>LightBox</title>
    <link rel="icon" type="image/png" href="../js.webp" sizes="16x16" />
    <meta name="Title" content="| DAM | - JAVASCRIPT">
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente">
    <meta name="keywords"
        content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Parallax, WEB, Accesibilidad">
    <meta name="distribution" content="global">
    <meta name="author" content="Alejandro Manzano">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--    Animaciones CSS https://daneden.github.io/animate.css/-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">


    <link rel="stylesheet" href="../js.css">

    <!--El menu es de aqui: https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp-->

    <!--Estilos-->
    <style>
    #contenido {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 800px;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    body {
        margin: 0;
    }

    img {
        margin: 10px;
    }

    .preview {
        width: 100%;
    }

    .row {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 800px;
    }

    .row>.col {
        padding: 0 8px;
    }

    .col {
        float: left;
        width: 30%;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding: 90px 62px 0px 62px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: auto;
        padding: 0 0 0 0;
        width: 60%;
        max-width: 1200px;
    }

    .slide {
        display: none;
    }

    .image-slide {
        width: 100%;
    }

    .modal-preview {
        width: 100%;
    }

    .dots {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    img.active,
    .preview:hover,
    .modal-preview:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    .previous,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .previous:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }
    </style>
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
        <nav class="topnav" id="myTopnav">


            <!-- <i class="fa fa-home x2" aria-hidden="true"></i> -->

            <b><a href="../index.html">GLOBAL</a></b>

            <a href="../index.html">Inicio</a>

            <div class="dropdown">

                <button class="dropbtn">Técnicos
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../0-Abono/abono.php">Abono Transporte</a>
                    <a href="../1-Tombola/tombola.php">¡Tombola!</a>
                    <a href="../2-Exploradores/exploradores.php">Exploradores</a>
                    <a href="../3-Mensajeria/mensajeria.php">Mensajería</a>
                    <a href="../4-Texto/texto.php">Mayus/Minus</a>
                    <a href="../5-Chocolate/chocolate.php">Chocolate</a>
                    <a href="../6-Procesador-de-Textos/procesador.php">Procesador de Textos</a>
                    <a href="../7-ALAX-LecturaTxT/ajax-txt.php">AJAX-Txt</a>
                    <a href="../8-LecturaXML/ajax-xml.php">Ajax & Xml</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Box
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../LightBox/lightbox.php">LightBox</a>
                    <a href="../ShadowBox/shadowbox.php">ShadowBox</a>

                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Sliders
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Slider-1/slider-1.php">Modelo 1</a>
                    <a href="../Slider-2/slider-2.php">Modelo 2</a>

                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Galerías
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Galeria-1/Galeria-1.php">Modelo 1</a>
                    <a href="../Galeria-2/Galeria-2.php">Modelo 2</a>

                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Tiempo
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Reloj/reloj.php">Reloj</a>
                    <a href="../Datepicker/datepicker.php">DatePicker</a>
                    <a href="../CountDown/countdown.php">CountDown</a>
                </div>
            </div>

            <a href="../parallax/parallax.php">Parallax</a>
            <a href="../jquery/jquery.php">JQuery</a>
            <!--
<div class="dropdown">
                <button class="dropbtn">Juegos
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="game-1.html">Game - I</a>
                    <a href="game-2.html">Game - II</a>
                    
                </div>
            </div>
-->

            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

        </nav>

        <!--A partir de aqui el contenido-->

        <div>
            <div class="caption animated">
                <span class="border">lightbox</span><br>

                <div id="contenido">
                    <div class="row">
                        <div class="col">
                            <img src="https://phantom-expansion.unidadeditorial.es/4a6e8abe8cb0f42dbf8bff0ce54e016b/crop/0x0/1590x1060/resize/1200/f/webp/assets/multimedia/imagenes/2023/03/14/16788052121226.jpg"
                                onclick="openLightbox();toSlide(1)" class="hover-shadow preview"
                                alt="Toy car on the road." />
                        </div>
                        <div class="col">
                            <img src="https://phantom-marca.unidadeditorial.es/ad728f2d16b4ed70c8f1be7fc9af57ff/resize/828/f/jpg/assets/multimedia/imagenes/2023/05/24/16849500271539.jpg"
                                onclick="openLightbox();toSlide(2)" class="hover-shadow preview"
                                alt="Toy car exploring offroad." />
                        </div>
                        <div class="col">
                            <img src="https://lamarinaplaza.com/wp-content/uploads/2020/12/Messi.jpg"
                                onclick="openLightbox();toSlide(3)" class="hover-shadow preview"
                                alt="Toy car in the city." />
                        </div>
                    </div>

                    <div id="Lightbox" class="modal">
                        <span class="close pointer" onclick="closeLightbox()">&times;</span>
                        <div class="modal-content">
                            <div class="slide">
                                <img src="https://phantom-expansion.unidadeditorial.es/4a6e8abe8cb0f42dbf8bff0ce54e016b/crop/0x0/1590x1060/resize/1200/f/webp/assets/multimedia/imagenes/2023/03/14/16788052121226.jpg"
                                    class="image-slide" alt="Toy car on the road." />
                            </div>
                            <div class="slide">
                                <img src="https://phantom-marca.unidadeditorial.es/ad728f2d16b4ed70c8f1be7fc9af57ff/resize/828/f/jpg/assets/multimedia/imagenes/2023/05/24/16849500271539.jpg"
                                    class="image-slide" alt="Toy car exploring offroad." />
                            </div>
                            <div class="slide">
                                <img src="https://lamarinaplaza.com/wp-content/uploads/2020/12/Messi.jpg"
                                    class="image-slide" alt="Toy car in the city." />
                            </div>

                            <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
                            <a class="next" onclick="changeSlide(1)">&#10095;</a>

                            <div class="dots">
                                <div class="col">
                                    <img src="https://phantom-expansion.unidadeditorial.es/4a6e8abe8cb0f42dbf8bff0ce54e016b/crop/0x0/1590x1060/resize/1200/f/webp/assets/multimedia/imagenes/2023/03/14/16788052121226.jpg"
                                        class="modal-preview hover-shadow" onclick="toSlide(1)"
                                        alt="Toy car on the road" />
                                </div>
                                <div class="col">
                                    <img src="https://phantom-marca.unidadeditorial.es/ad728f2d16b4ed70c8f1be7fc9af57ff/resize/828/f/jpg/assets/multimedia/imagenes/2023/05/24/16849500271539.jpg"
                                        class="modal-preview hover-shadow" onclick="toSlide(2)"
                                        alt="Toy car exploring offroad." />
                                </div>
                                <div class="col">
                                    <img src="https://lamarinaplaza.com/wp-content/uploads/2020/12/Messi.jpg"
                                        class="modal-preview hover-shadow" onclick="toSlide(3)"
                                        alt="Toy car in the city." />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <footer>Fuente: <a
                href="https://www.freecodecamp.org/news/how-to-create-a-lightbox-using-html-css-and-javascript/"
                class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
    </main>
    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    let slideIndex = 1;
    showSlide(slideIndex);

    function openLightbox() {
        document.getElementById('Lightbox').style.display = 'block';
        document.querySelector('nav').style.display = 'none';
        document.querySelector('footer').style.display = 'none';
    };

    function closeLightbox() {
        document.getElementById('Lightbox').style.display = 'none';
        document.querySelector('nav').style.display = 'block';
        document.querySelector('footer').style.display = 'block';
    };

    function changeSlide(n) {
        showSlide(slideIndex += n);
    };

    function toSlide(n) {
        showSlide(slideIndex = n);
    };

    function showSlide(n) {
        const slides = document.getElementsByClassName('slide');
        let modalPreviews = document.getElementsByClassName('modal-preview');

        if (n > slides.length) {
            slideIndex = 1;
        };

        if (n < 1) {
            slideIndex = slides.length;
        };

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        };

        for (let i = 0; i < modalPreviews.length; i++) {
            modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
        };

        slides[slideIndex - 1].style.display = 'block';
        modalPreviews[slideIndex - 1].className += ' active';
    };
    </script>

</body>

</html>