<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	
	if(isset($_GET["excluir"])){

		$idequipe = htmlentities($_GET["excluir"]);
		require("../config.php");
		$mysqli->query("delete from equipamentos where idequipe = '$idequipe'");
		echo $mysqli->error;
		if ($mysqli->error==""){
			echo "Excluido com Sucesso<br />";
			echo "<a href='equipamentos.php'>Voltar</a>";
		}
	}
	?>
</body>
</html>