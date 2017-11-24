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
	mysqli_query($ok, "delete from amigos where codigo='$cod'") or die ("Não  possível deletar amigo!");
	print("Amigo deletado com sucesso (código): $cod");
?>
<p><a href="mostra_db.php">Mostrar</a>
</body>
</html>