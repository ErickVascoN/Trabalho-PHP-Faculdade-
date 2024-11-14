<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	
	if(isset($_GET["excluir"])){

		$idcultura = htmlentities($_GET["excluir"]);
		require("../config.php");
		$mysqli->query("delete from culturas where idcultura = '$idcultura'");
		echo $mysqli->error;
		if ($mysqli->error==""){
			echo "Excluido com Sucesso<br />";
			echo "<a href='culturas.php'>Voltar</a>";
		}
	}
	?>
</body>
</html>