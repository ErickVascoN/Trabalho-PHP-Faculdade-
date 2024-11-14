<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="adicionarprop.php">
		<input type="hidden" name="idprop" value="">
		Propriedade: <input type="text" name="propriedade" maxlength="60" placeholder="nome da propriedade">
		<br/><br/>
		Proprietario: <input type="text" name="proprietario" maxlength="60" placeholder="nome do proprietario">		
        <br/><br/>
        Area: <input type="number" name="area" maxlength="6" placeholder="area total (M)">
        <br><br>
        Cultura: <input type="text" name="cultura" maxlength="60" placeholder="cultura">
        <input type="submit" value="salvar" name="botao">

	</form>

</body>
</html>

<?php 
if(isset($_POST["botao"])){

	require("../config.php");

	$propriedade=htmlentities($_POST["propriedade"]);
    $proprietario=htmlentities($_POST["proprietario"]);	
    $area=htmlentities($_POST["area"]);
    $cultura=htmlentities($_POST["cultura"]);

	$mysqli->query("insert into propriedade values('', '$propriedade', '$proprietario', '$area', '$cultura')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='propriedade.php'> Voltar</a>";
	}

}
?>