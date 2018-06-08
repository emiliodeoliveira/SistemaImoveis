<?php
  include('sys/auth.php');
?>
<html>
<head>
<title>Dados a alterar do amigo!</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$cod=$_GET['cod'];
	require("conecta.inc.php");
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$result=mysqli_query($ok, "select * from amigos where codigo='$cod'") or die ("Não é possível retornar dados do amigo!");
	$linha=mysqli_fetch_array($result);
	$Codigo=$linha["codigo"];
	$Nome=$linha["nome"];
	$EMail=$linha["email"];
	$Telefone=$linha["telefone"];
	$Aniversario=$linha["aniversario"];
	print("<h3>Alterando os dados do amigo:</h3><p>");
?>
<form action="confirma_alterar.php" method="get">
Código: <?php print($Codigo)?>
<input type="hidden" name="cod_alter" value="<?php print($Codigo)?>">
<br>Nome: <input type="text" name="nome_alter" value="<?php print($Nome)?>">
<br>E-Mail: <input type="text" name="mail_alter" value="<?php print($EMail)?>">
<br>Telefone: <input type="text" name="fone_alter" value="<?php print($Telefone)?>">
<br>Aniversário: <input type="text" name="aniver_alter" value="<?php print($Aniversario)?>">
<p><input type="submit" value="Alterar Dados">
</form>
<p><a href="mostra_db.php">Cancelar e voltar</a>
</body>
</html>