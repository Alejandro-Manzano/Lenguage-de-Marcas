function premio() {
            
    document.getElementById("b").disabled=true;
    var numero = Math.floor((Math.random() * 100) + 1);    
    
  document.getElementById("numero").innerHTML="Número Obtenido<p><span class='numero'>"+numero+"</span>";
    
    if(numero >=1 && numero<=50){
       
       document.getElementById("premio").innerHTML="<i class='fa fa-window-close fa-2x'></i><span class='mensaje'>Lo sentimos, el número no está premiado</span><img src='https://static.vecteezy.com/system/resources/previews/012/280/564/non_2x/cartoon-negative-cross-symbol-free-vector.jpg' width='80px' class='mano' onclick='recarga ()'>";
       
        }else
            if(numero >50 && numero <=75){
        document.getElementById("premio").innerHTML="<span class='mensaje'>¡ PREMIO: Vuelve a Jugar !</span><p><img src='https://lh3.googleusercontent.com/-Ebz-xZfTi78/WRWmYIA6XYI/AAAAAAAABDQ/lD2qdBzdr2oOGjD7u6p0_tAqzO2EVwWIgCHM/s1600/338e5a3eb0c474ee75beb6307c13c7f2_tombola-related-keywords-tombola-long-tail-keywords-keywordsking-tombola-clipart_1046-644.png' width='300px'>";
        
            document.getElementById("b").disabled=false;
                
            }else
                if(numero >75 && numero <=90){
                document.getElementById("premio").innerHTML="<span class='mensaje'>¡ PREMIO: Un peluche !</span><p><img src='https://images-na.ssl-images-amazon.com/images/I/41VwFraVPDL._SY355_.jpg' width='300px'>"
                
            }else {
                document.getElementById("premio").innerHTML="<span class='mensaje'>¡ PREMIO: Perrito Piloto !</span><p><img src='img/peluche-oso-piloto.png' width='300px'>"
            }
}