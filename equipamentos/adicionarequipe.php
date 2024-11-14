<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="adicionarequipe.php">
		<input type="hidden" name="idequipe" value="">
		Equipamento: <input type="text" name="equipamento" maxlength="60" placeholder="equipamento">
		<br/><br/>
		Localizaçâo: <input type="text" name="localizacao" maxlength="60" placeholder="localizacao">		
        <br/><br/>
        Custo: <input type="number" name="custo" maxlength="9,2" placeholder="custo">
        <br><br>
        Marca: <input type="text" name="marcamodelo" maxlength="20" placeholder="marca">
        <input type="submit" value="salvar" name="botao">

	</form>

</body>
</html>

<?php 
if(isset($_POST["botao"])){

	require("../config.php");

	$equipamento=htmlentities($_POST["equipamento"]);
    $localizacao=htmlentities($_POST["localizacao"]);	
    $custo=htmlentities($_POST["custo"]);
    $marcamodelo=htmlentities($_POST["marcamodelo"]);
	
	$mysqli->query("insert into equipamentos values('', '$equipamento', '$localizacao', '$custo', '$marcamodelo')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='equipamentos.php'> Voltar</a>";
	}

}
?>