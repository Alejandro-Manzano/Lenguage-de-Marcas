<div class="topnav" id="myTopnav">
        
<a href="../../index.html" class="active">Inicio</a>
        
       
        <a href="../BootStrap/bootstrap.php" class="dropdown">BootStrap</a>

        <a href="../Parallax/parallax.php" class="dropdown">Parallax</a>
       

        <div class="dropdown">
            <button class="dropbtn">Rwd & Awd 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">Camisetas</a>
              <a href="../../css/RWD/Detalle-Pelicula.php">Película</a>
              <a href="https://solired.es/openaula/Promociones/Promocion-2023-GDAM-1-1/" target="_blank">Orla</a>
              <a href="#">Apuestas</a>
              
            </div>
          </div> 
        
        <div class="dropdown">
            <button class="dropbtn">FlexBox 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="../../layout/flexbox/Coches.php">Coches</a>
              <a href="../../css/flexbox/protonvpn.php">Proton VPN</a>
              <a href="../../layout/flexbox/Operadora.php">Operadora</a>
              
            </div>
          </div> 

        <div class="dropdown">
          <button class="dropbtn">BoxModel 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="../../layout/BoxModel/modelX.php">Modelo X</a>
            <a href="../../layout/BoxModel/modelY.php">Modelo Y</a>
            <a href="../../layout/BoxModel/portada-A.php">Deportes</a>
            <a href="../../layout/BoxModel/Operadora.php">Operadora (Lidertel)</a>
           
          </div>
        </div> 
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      
           
      <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script>