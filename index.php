<?php
  include('sys/auth.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>iDwell - Sistema de administração de imóveis</title>
	<link rel="stylesheet" href="css/ppi-default.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs"/>
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr.custom.js"></script>
</head>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="ppi-default-light-grey">
<!-- Top container -->
<div class="ppi-default-bar ppi-default-top ppi-default-teal ppi-default-large" style="z-index:4">
  <button class="ppi-default-bar-item ppi-default-button ppi-default-hide-large ppi-default-hover-none ppi-default-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="ppi-default-bar-item ppi-default-left">iDwell</span>
</div>
<!-- Sidebar/menu -->
<nav class="ppi-default-sidebar ppi-default-collapse ppi-default-white ppi-default-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="ppi-default-container ppi-default-row">
    <div class="ppi-default-col s4">
      <img src="./images/avatar2.png" class="ppi-default-circle ppi-default-margin-right" style="width:46px">
    </div>
    <!-- Session menu -->
    <?php
    print("<div class='ppi-default-col s8 ppi-default-bar'>");
    print("<span>Olá, <strong>$usuario</strong></span><br>");
    print("<span><font size='1'><a href='./logout.php'>Logout</a></font></span></h6><br>");
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
      <a href="./index.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding ppi-default-blue"><i class="fa fa-home fa-fw"></i>  Home</a>
      <a href="./administradoras.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-bank fa-fw"></i>  Administradoras</a>
      <a href="./condominios.php" class="ppi-default-bar-item ppi-default-button ppi-default-padding"><i class="fa fa-building fa-fw"></i>  Condomínios</a>
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
<header class="ppi-default-container" style="padding-top:22px">
<div class="container">	
	<header>
	<h1>iDwell<span>Sistema de administração de imóveis para fins acadêmicos</span></h1>	
	</header>
	<div class="main clearfix">
		<nav id="menu" class="nav">					
			<ul>
				<li>
					<a href="./administradoras.php">
						<span class="icon">
						<i aria-hidden="true" class="icon-portfolio"></i>
						</span>
						<span>Administradoras</span>
						</a>
					</li>
					<li>
						<a href="./condominios.php">
							<span class="icon"> 
							<i aria-hidden="true" class="icon-home"></i>
							</span>
							<span>Condomínios</span>
							</a>
						</li>
						<li>
							<a href="./lotes.php">
							<span class="icon">
							<i aria-hidden="true" class="icon-portfolio"></i>
							</span>
							<span>Lotes</span>
							</a>
						</li>
						<li>
							<a href="./pessoas.php">
							<span class="icon">
							<i aria-hidden="true" class="icon-team"></i>
							</span>
							<span>Pessoas</span>
							</a>
						</li>
						<li>
							<a href="./consultas.php">
								<span class="icon">
									<i aria-hidden="true" class="icon-services"></i>
								</span>
								<span>Consultas</span>
							</a>
						</li>
						<li>
							<a href="./sobre.php">
							<span class="icon">
							<i aria-hidden="true" class="icon-contact"></i>
							</span>
							<span>Sobre o trabalho</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	
			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');
			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}
			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;
				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
		</script>
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