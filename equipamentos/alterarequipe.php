<?php 
	require("../config.php");
    $cultura="";
    $variedade=	"";
    $ciclo="";
    $colheita="";

	if(isset($_GET["alterar"])){
		$idequipe = htmlentities($_GET["alterar"]);
		$query=$mysqli->query("select * from equipamentos where idequipe = '$idequipe'");
		$tabela=$query->fetch_assoc();
        $equipamento=$tabela ["equipamento"];
        $localizacao=$tabela["localizacao"];	
        $custo=$tabela ["custo"];
        $marcamodelo=$tabela["marcamodelo"];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="alterarequipe.php">
		<input type="hidden" name="idequipe" value="<?php echo $idequipe ?>">
        <br><br>
		Equipamento: <input type="text" name="equipamento" maxlength="60" placeholder="equipamento">
		<br/><br/>
		Localizaçâo: <input type="text" name="localizacao" maxlength="60" placeholder="localizacao">		
        <br/><br/>
        Custo: <input type="number" name="custo" maxlength="9,2" placeholder="custo">
        <br><br>
        Marca: <input type="text" name="marcamodelo" maxlength="20" placeholder="marca">
        <input type="submit" value="salvar" name="botao">

	</form>
	<a href ="equipamentos.php"> Voltar </a>
	<br />
</body>
</html>

<?php 
	if(isset($_POST["botao"])){
        $idequipe=htmlentities($_POST["idequipe"]);
        $equipamento=htmlentities($_POST["equipamento"]);
        $localizacao=htmlentities($_POST["localizacao"]);	
        $custo=htmlentities($_POST["custo"]);
        $marcamodelo=htmlentities($_POST["marcamodelo"]);

		$mysqli->query("update equipamentos set equipamento = ' $equipamento', localizacao='$localizacao', custo= '$custo', marcamodelo = '$marcamodelo' where idequipe = '$idequipe'");
		echo $mysqli->error;
		if ($mysqli->error == "") {
			echo "Alterado com sucesso";
		}
	}
?>