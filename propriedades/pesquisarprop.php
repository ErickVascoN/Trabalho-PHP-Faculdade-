<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="pesquisarprop.php">
		Proprietario: <input type="text" name="proprietario" maxlength="60" placeholder="digite o proprietario">
        <br><br>
        Propriedade: <input type="text" name="propriedade" maxlength="60" placeholder="digite a propriedade">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
	if(isset($_POST["botao"])){

		require("../config.php");
		$proprietario=htmlentities($_POST["proprietario"]);
        $propriedade=htmlentities($_POST["propriedade"]);

			// pesquisando dados
		$query = $mysqli->query("select * from propriedade where proprietario like '%$proprietario%'AND propriedade like '%$propriedade%'");
		echo $mysqli->error;

		echo "
		<table border='1' width='400'>
		<tr>
		<th>ID</th>
		<th>propriedade</th>
		<th>proprietario</th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'>$tabela[idprop]</td>
			<td align='center'>$tabela[propriedade]</td>
			<td align='center'>$tabela[proprietario]</td>
			</tr>
			";
		}
		echo "</table>";
	}
	?>
	<a href='propriedade.php'> Voltar</a>
</body>
</html>