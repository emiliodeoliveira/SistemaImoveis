<!DOCTYPE html>
<html>
<title>iDwell - Condomínios</title>
    <?php  
      session_start();
      if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
      {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
        }
      $logado = $_SESSION['login'];
      $usuario = $_SESSION['login'];
    ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/ppi-default.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="ppi-default-light-grey">
<!-- Top container -->
<div class="ppi-default-bar ppi-default-top ppi-default-black ppi-default-large" style="z-index:4">
  <button class="ppi-default-bar-item ppi-default-button ppi-default-hide-large ppi-default-hover-none ppi-default-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="ppi-default-bar-item ppi-default-left">iDwell</span>
</div>
<!-- Sidebar/menu -->
<nav class="ppi-default-sidebar ppi-default-collapse ppi-default-white ppi-default-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="ppi-default-container ppi-default-row">
    <div class="ppi-default-col s4">
      <img src="/w3images/avatar2.png" class="ppi-default-circle ppi-default-margin-right" style="width:46px">
    </div>
    <!-- Session menu -->
    <?php
    print("<div class='ppi-default-col s8 ppi-default-bar'>");
    print("<span>Olá, <strong>$usuario</strong></span><br>");
    print("</div>");
    ?>
  </div>
  <hr>
  <!-- Resposive menu -->
  <div class="ppi-default-container">
    <h5>Menu</h5>
  </div>
  <div class="ppi-default-bar-block">
    <a href="#" class="ppi-default-bar-item ppi-default-button ppi-default-padding-16 ppi-default-hide-large ppi-default-dark-grey ppi-default-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Fechar menu</a>
    <a href="./index.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-home fa-fw"></i>  Home</a>
    <a href="./condominios.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding ppi-default-blue"><i class="fa fa-building fa-fw"></i>  Condomínios</a>
    <a href="./lotes.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-users fa-fw"></i>  Lotes</a>
    <a href="./pessoas.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-user fa-fw"></i>  Pessoas</a>
    <a href="./consultas.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-search fa-fw"></i>  Consultas</a>
    <a href="./sobre.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-bell fa-fw"></i>  Sobre</a><br><br>
  </div>
</nav>
<!-- Overlay -->
<div class="ppi-default-overlay ppi-default-hide-large ppi-default-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="ppi-default-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="ppi-default-container" style="padding-top:22px">
    <h5><b>Condomínios</b></h5>
  </header>
  <div class="ppi-default-container">
  <!-- Middle Menu -->
  <div class="middle-menu">
      <input class="checked" id="tab1" type="button" name="tabs" checked>
  <label for="tab1"><a href="./condominios.php">Listar</a></label>
     <input class="button-hover" id="tab2" type="button" name="tabs">
  <label for="tab2"><a href="./cad_condominio.php">Cadastrar</a></label> 
</div> 
  <div class="ppi-default-container ppi-default-ul ppi-default-card-4 ppi-default-white">
    <h5>Condomínios cadastrados</h5>
    
    <?php
      header('Content-Type: text/html; charset=utf-8');
      require("conecta.inc.php");  //inclui o arquivo para conexão
      $ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
      $resultado=mysqli_query($ok, "Select * from condominios;");
      while ($linha=mysqli_fetch_array($resultado)) {
        $Id=$linha["idCondominio"];
        $Nome=$linha["nomeCondominio"];
        $Endereco=$linha["endereco"];
        $Imagem=$linha["imgId"];
        print("<div class='ppi-default-row'>");
        print("<div class='ppi-default-col m2 text-center'>");
        print("<img class='ppi-default-circle' src='./images/$Imagem' style='width:96px;height:96px'>");
        print("</div>");
        print("<div class='ppi-default-col m10 ppi-default-container'>");
        print("<h4>$Nome<span class='ppi-default-opacity ppi-default-medium'>Lote 1</span></h4>");
        print("<p>$Endereco</p>");

        print("<h6><a href='deleta_condominio.php?cod=$Id'>Deletar</a></h6>");
        print("<h6><a href='altera_condominio.php?cod=$Id'>Alterar</a></h6>"); 

        print("</div>");
        print("</div>"); }
      ?>

  </div>
  <br>
  <div class="ppi-default-container ppi-default-dark-grey ppi-default-padding-32">
    <div class="ppi-default-row">
      <div class="ppi-default-container ppi-default-third">
        <h5 class="ppi-default-bottombar ppi-default-border-green">Demográfico</h5>
        <p>Lotes</p>
        <p>Cidades</p>
        <p>Estados</p>
      </div>
      <div class="ppi-default-container ppi-default-third">
        <h5 class="ppi-default-bottombar ppi-default-border-red">Clientes</h5>
        <p>Cadastrados</p>
        <p>Ativos</p> 
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="ppi-default-container ppi-default-padding-16 ppi-default-light-grey">
    <h4>IDwell</h4>
    <p>Powered by Emilio de Oliveira e Bruno de Oliveira</a></p>
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