<!DOCTYPE html>

    <html dir="ltr" lang="es">

        <head>

            <meta charset="utf-8">
            <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
            <meta name="language" content="es" /> 
            <title>Tablas I</title>
            <meta name="title" content="DAM, JAVASCRIPT, PHP, HTML, CSS, XAMPP" />
            <meta name="description" content="Ejercicio de tablas en HTML" />
            <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
            <meta name="distribution" content="global" />
            <meta name="author" content="Alejandro Manzano" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../htmlCss/Css/07-tablas-1.css">
       

        </head>

        <body>

            <header>

                <h1 id="arriba">Tablas - I</h1>
                <br>
	            <hr>
                
            </header>
            <br>
            <?php
                include 'menu.php';
                ?>
            <br>

            <main>
    
                <table>
    
                    <caption>Presupuesto Home cinema </caption>
    
                        <tr>
                            <th>Nombre del producto</th>
                            <th>Precio unitario</th>
                            <th>Unidades</th>
                            <th>Subtotal</th>
                        </tr>
    
                        <tr>
                            <td>TvSony KDL-50W685</td>
                            <td>777</td>
                            <td>1</td>
                            <td>777</td>
                        </tr>
    
                        <tr>
                            <td>Gafas 3d Sony TDG-BR200/W</td>
                            <td>39</td>
                            <td>4</td>
                            <td>156</td>
                        </tr>
    
                        <tr>
                            <td>Barra de sonido Polkaudio 3000 IHT</td>
                            <td>289,90</td>
                            <td>1</td>
                            <td>289,90</td>
                        </tr>
    
                        <tr>
                            <td>Soporte para TV ultra planos GISAN SL 54</td>
                            <td>159</td>
                            <td>1</td>
                            <td>159</td>
                        </tr>
    
                        <tr>
                            <th>TOTAL</th>
                            <td>-------</td>
                            <td>12</td>
                            <th>1381,9</th>
                        </tr>
    
                    </table>

                    <table>
    
                        <p>*Toda la información relativa a los artículos seleccionados en <a href="https://www.elcorteingles.es/" title="Web corte Ingle" target="_blank">www.elcorteingles.es</a></p>
    
                        <h3 class="strong">Se adjunta tabla representativa.</h3>
    
                        <p class="italic">*Todos los precios incluyen IVA</p>
                            
                    <table>
    
                        <caption>Características de su selección y precios actualizados</caption>
    
                        <tr>
                            <th>Nombre y datos del producto</th>
                            <th>Imagen </th>
                        </tr>
    
                        <tr>
                            <td><p><a href="https://www.mediamarkt.es/es/promo-list/Sony_tv_sep_pd_TM?&&&&gad_source=1&gclid=Cj0KCQiA6vaqBhCbARIsACF9M6kf74GVtYL17tfCy5uZ3wAPDU_CWPO_1he1J6l8d73ppLBPJ2XSUWEaAq79EALw_wcB&gclsrc=aw.ds" target="_blank">Tv Sony KDL-50W685</a></p>
                            <p>PVP recomendado <span class="del">1099 €</span></p>
                            <h2>Precio actual 777€</h2></td>
                            <td><img class="tv" src="img/tv.png" alt="tv" ></td>
                        </tr>
    
                        <tr>
                            <td><p><a href="https://www.amazon.es/s?k=las+gafas+3d&adgrpid=55638143469&hvadid=275583393117&hvdev=c&hvlocphy=9181152&hvnetw=g&hvqmt=e&hvrand=13516519987299302044&hvtargid=kwd-298818615504&hydadcr=3885_1786636&tag=hydes-21&ref=pd_sl_5lo3kt6ihj_e" target="_blank">Gafas 3d Sony TDG-BR200/W</a></p>
                            <p>PVP recomendado <span class="del">69 €</span></p>
                            <h2>Precio actual 39</h2></td>
                            <td><img class="gafas" src="img/gafas.png" alt="gafas"></td>
                        </tr>
    
                        <tr>
                            <td><p><a href="https://www.pccomponentes.com/altavoces?campaigntype=dsa&campaignchannel=busqueda&gad_source=1&gclid=Cj0KCQiA6vaqBhCbARIsACF9M6mus9cpU8ve09gXBCXoi6nImTgkUcQYJjkmwY-iYhDM2m_qZEJmqlUaApN4EALw_wcB" target="_blank">Barra de sonido Polkaudio 3000 IHT</a></p>
                            <h2>Precio actual 289,90€</h2></td>
                            <td><img class="altavoz" src="img/altavoz.png" alt="altavoz"></td>
                        </tr>
    
                        <tr>
                            <td><p><a href="https://www.amazon.es/s?k=sujeci%C3%B3n+tv+pared&adgrpid=64550220440&hvadid=311276722446&hvdev=c&hvlocphy=9181152&hvnetw=g&hvqmt=e&hvrand=9023579650695692303&hvtargid=kwd-324785087186&hydadcr=3880_1786625&tag=hydes-21&ref=pd_sl_7bul9dm9vi_e" target="_blank">Soporte para TV ultra planos GISAN SL 54</a></p>
                            <p>PVP recomendado <span class="del">199 €</span></p>
                            <h2>Precio actual 159€</h2></td>
                            <td><img class="mesa" src="img/mesa.webp" alt="mesa" ></td>
                        </tr>
    
                    </table>
    
	        </main>
	
	        <footer>
                <hr>
		        <p class="p-abajo"><a href="#arriba"><img class="arriba" src="img/arriba.png">SUBIR</a></p>
	        </footer>
	
</body>

</html>