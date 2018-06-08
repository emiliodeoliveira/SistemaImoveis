<?php
  include('sys/auth.php');
?>
<html>
<head>
<title>Dados do amigo alterados!</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$cod=$_GET['cod_alter'];
	$nome_alter=$_GET['nome_alter'];
	$mail_alter=$_GET['mail_alter'];
	$fone_alter=$_GET['fone_alter'];
	$aniver_alter=$_GET['aniver_alter'];
	require("conecta.inc.php");
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	print("Alteração do amigo realizada:<p>");
	print("$cod <b>$nome_alter</b> $mail_alter $fone_alter $aniver_alter <p>");
	mysqli_query($ok, "update amigos set nome='$nome_alter', email='$mail_alter', telefone='$fone_alter', aniversario='$aniver_alter' where codigo='$cod'") or die ("Não é possível alterar dados do amigo!");
	print("Dados do amigo alterados com sucesso!");
?>
<p><a href="mostra_db.php">Mostrar</a>
</body>
</html>