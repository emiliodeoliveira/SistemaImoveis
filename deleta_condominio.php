<?php
  include('sys/auth.php');
?>
<html>
<head>
<title>Dados a deletar do amigo!</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$cod=$_GET['cod'];
	require("conecta.inc.php");
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$result=mysqli_query($ok, "select * from condominios where idCondominio='$cod'") or die ("Não é possível retornar dados do condomínio!");
	$linha=mysqli_fetch_array($result);
	$Id=$linha["idCondominio"];
    $Nome=$linha["nomeCondominio"];
    $Endereco=$linha["endereco"];
	print("<h3>Deletando a entrada:</h3><p>");
	print("ID Condomínio: $Id<br>");
	print("Nome: $Nome<br>");
   	print("Endereço: <b>$Endereco</b><br>");
   	
?>
<form action="confDeletaCond.php" method="get">
<input type="hidden" name="cod_del" value="<?php print($Id)?>">
<br><input type="submit" value="Deletar Dados">
</form>
<p><a href="./condominios.php">Cancelar e voltar</a>
</body>
</html>