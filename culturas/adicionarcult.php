<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="adicionarcult.php">
		<input type="hidden" name="idcultura" value="">
		Cultura: <input type="text" name="cultura" maxlength="60" placeholder="cultura">
		<br/><br/>
		Variedade: <input type="text" name="variedade" maxlength="60" placeholder="variedade">		
        <br/><br/>
        Ciclo: <input type="text" name="ciclo" maxlength="20" placeholder="ciclo">
        <br><br>
        colheita: <input type="text" name="colheita" maxlength="20" placeholder="colheita">
        <input type="submit" value="salvar" name="botao">

	</form>

</body>
</html>

<?php 
if(isset($_POST["botao"])){

	require("../config.php");
	$cultura=htmlentities($_POST["cultura"]);
    $variedade=htmlentities($_POST["variedade"]);	
    $ciclo=htmlentities($_POST["ciclo"]);
    $colheita=htmlentities($_POST["colheita"]);
	
	$mysqli->query("insert into culturas values('', '$cultura', '$variedade', '$ciclo', '$colheita')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='culturas.php'> Voltar</a>";
	}

}
?>