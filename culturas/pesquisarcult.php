<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="pesquisarcult.php">
		cultura: <input type="text" name="cultura" maxlength="60" placeholder="digite a cultura">
        <br><br>
        colheita: <input type="text" name="colheita" maxlength="60" placeholder="digite a colheita">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
	if(isset($_POST["botao"])){

		require("../config.php");
		$cultura=htmlentities($_POST["cultura"]);
        $colheita=htmlentities($_POST["colheita"]);

			// pesquisando dados
		$query = $mysqli->query("select * from culturas where cultura like '%$cultura%' AND colheita like '%$colheita%'");
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
			<tr><td align='center'>$tabela[idcultura]</td>
			<td align='center'>$tabela[cultura]</td>
			<td align='center'>$tabela[colheita]</td>
			</tr>
			";
		}
		echo "</table>";
	}
	?>
	<a href='culturas.php'> Voltar</a>
</body>
</html>