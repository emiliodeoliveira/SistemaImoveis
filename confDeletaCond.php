<?php
  include('sys/auth.php');
?>
<html>
<head>
<title>Dados do amigo deletados!</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$cod=$_GET['cod_del'];
	require("conecta.inc.php");
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	mysqli_query($ok, "delete from condominios where idCondominio='$cod'") or die ("Não  possível deletar condominio!");
	print("condominio deletado com sucesso (código): $cod");
?>
<p><a href="./condominios.php">Mostrar</a>
</body>
</html>