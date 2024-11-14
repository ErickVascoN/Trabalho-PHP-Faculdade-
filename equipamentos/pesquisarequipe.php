<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="pesquisarequipe.php">
		Equipamento: <input type="text" name="equipamento" maxlength="60" placeholder="digite o equipamento">
        <br><br>
        Marca: <input type="text" name="marcamodelo" maxlength="60" placeholder="digite a marca">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
	if(isset($_POST["botao"])){

		require("../config.php");
		$equipamento=htmlentities($_POST["equipamento"]);
        $marcamodelo=htmlentities($_POST["marcamodelo"]);

			// pesquisando dados
		$query = $mysqli->query("select * from equipamentos where equipamento like '%$equipamento%' AND marcamodelo like '%$marcamodelo%'");
		echo $mysqli->error;

		echo "
		<table border='1' width='400'>
		<tr>
		<th>ID</th>
		<th>Equipamento</th>
		<th>Marca</th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'>$tabela[idequipe]</td>
			<td align='center'>$tabela[equipamento]</td>
			<td align='center'>$tabela[marcamodelo]</td>
			</tr>
			";
		}
		echo "</table>";
	}
	?>
	<a href='equipamentos.php'> Voltar</a>
</body>
</html>