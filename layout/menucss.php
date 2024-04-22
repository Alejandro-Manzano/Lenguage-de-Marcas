<div class="topnav" id="myTopnav">

    <a href="../../index.html" class="active">Global</a>


    <a href="../BootStrap/bootstrap.php" class="dropdown">BootStrap</a>

    <div class="dropdown">
        <button class="dropbtn">Rwd & Awd
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../../layout/RWD/camiseta.php">Camisetas</a>
            <a href="../../layout/RWD/orla.php">Orla</a>
            <a href="../../layout/RWD/apuestas.php">Apuestas</a>
            <!-- <a href="../../layout/RWD/pelicula.php">Película</a> -->
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">FlexBox
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../../layout/flexbox/Coches.php">Coches</a>
            <a href="../../layout/flexbox/Operadora.php">Operadora</a>
            <a href="../../layout/flexbox/Vpn.php">Vpn</a>
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