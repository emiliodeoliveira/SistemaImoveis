<!DOCTYPE html>
<html>
<title>Sistema de administração de imóveis - Consultas</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/ppi-default.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="ppi-default-light-grey">

<!-- Top container -->
<div class="ppi-default-bar ppi-default-top ppi-default-black ppi-default-large" style="z-index:4">
  <button class="ppi-default-bar-item ppi-default-button ppi-default-hide-large ppi-default-hover-none ppi-default-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="ppi-default-bar-item ppi-default-left">Sistema de administração de imóveis</span>
</div>

<!-- Sidebar/menu -->
<nav class="ppi-default-sidebar ppi-default-collapse ppi-default-white ppi-default-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="ppi-default-container ppi-default-row">
    <div class="ppi-default-col s4">
      <img src="/w3images/avatar2.png" class="ppi-default-circle ppi-default-margin-right" style="width:46px">
    </div>
    
    <div class="ppi-default-col s8 ppi-default-bar">
      <span>Olá, <strong>Senac</strong></span><br>
     
    </div>
  </div>
  <hr>
  <div class="ppi-default-container">
    <h5>Menu</h5>
  </div>
  <div class="ppi-default-bar-block">
    <a href="#" class="ppi-default-bar-item ppi-default-button ppi-default-padding-16 ppi-default-hide-large ppi-default-dark-grey ppi-default-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Fechar menu</a>
    <a href="./index.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-home fa-fw"></i>  Home</a>
    <a href="./condominios.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-building fa-fw"></i>  Condomínios</a>
    <a href="#" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-users fa-fw"></i>  Lotes</a>
    <a href="#" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-user fa-fw"></i>  Clientes</a>
    <a href="./consultas.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding "><i class="fa fa-search fa-fw"></i>  Consultas</a>
    <a href=".sobre.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding ppi-default-blue"><i class="fa fa-bell fa-fw"></i>  Sobre</a><br><br>
  </div>
</nav>


<!-- Overlay -->
<div class="ppi-default-overlay ppi-default-hide-large ppi-default-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Page content -->
<div class="ppi-default-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="ppi-default-container" style="padding-top:22px">
    <h5><b>Sobre</b></h5>
  </header>
<div class="ppi-default-container">
  <div class="ppi-default-container ppi-default-ul ppi-default-card-4 ppi-default-white">
    <h5>Trabalho de Programação para Internet</h5>
    <div class="ppi-default-row ">

        <p>Trabalho desenvolvido por Bruno de Oliveira e Emilio de Oliveira.</p><br>
        </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="ppi-default-container ppi-default-padding-16 ppi-default-light-grey">
    <h4>Sistema de administração de imóveis</h4>
    <p>Powered by Emilio e Bruno Oliveira</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>