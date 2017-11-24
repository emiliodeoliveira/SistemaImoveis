<html>
<head>
<title>iDwell!</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$nome=$_GET['nomeCond'];
	$bairro=$_GET['bairroCond'];
	$end=$_GET['endCond'];
	$comp=$_GET['compCond'];
	$num=$_GET['numCond'];
	$imgId='cond-01.jpg';



	if ($nome=="" or $bairro=="" or $end=="" or $comp=="" or $num=="")
		print("Faltou preencher algum campo...");
	else
	{
		require("conecta.inc.php");
		$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		print("Inserindo o condomínio:<p>");
		mysqli_query($ok, "insert into condominios (bairro, endereco, complemento, numero, nomeCondominio, imgId) values ('$bairro', '$end', '$comp', '$num', '$nome', '$imgId')") or die ("Não é possível inserir condomínio!");
		print("condomínio inserido com sucesso: <b>$nome</b>");
	}
?>
<p><a href="./condominios.php">Mostrar</a>
</body>
</html>