<?php 
	require("../config.php");
    $cultura="";
    $variedade=	"";
    $ciclo="";
    $colheita="";

	if(isset($_GET["alterar"])){
		$idcultura = htmlentities($_GET["alterar"]);
		$query=$mysqli->query("select * from culturas where idcultura = '$idcultura'");
		$tabela=$query->fetch_assoc();
        $cultura=$tabela["cultura"];
        $variedade=$tabela["variedade"];	
        $ciclo=$tabela["ciclo"];
        $colheita=$tabela["colheita"];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="alterarcult.php">
		<input type="hidden" name="idcultura" value="<?php echo $idcultura ?>">
        <br><br>
		Cultura: <input type="text" name="cultura" maxlength="60" placeholder="cultura">
		<br/><br/>
		Variedade: <input type="text" name="variedade" maxlength="60" placeholder="variedade">		
        <br/><br/>
        Ciclo: <input type="text" name="ciclo" maxlength="20" placeholder="ciclo">
        <br><br>
        colheita: <input type="text" name="colheita" maxlength="20" placeholder="colheita">
        <input type="submit" value="salvar" name="botao">

	</form>
	<a href ="culturas.php"> Voltar </a>
	<br />
</body>
</html>

<?php 
	if(isset($_POST["botao"])){
        $idcultura=htmlentities($_POST["idcultura"]);
        $cultura=htmlentities($_POST["cultura"]);
        $variedade=htmlentities($_POST["variedade"]);	
        $ciclo=htmlentities($_POST["ciclo"]);
        $colheita=htmlentities($_POST["colheita"]);

		$mysqli->query("update culturas set cultura = ' $cultura', variedade='$variedade', ciclo= '$ciclo', colheita = '$colheita' where idcultura = '$idcultura'");
		echo $mysqli->error;
		if ($mysqli->error == "") {
			echo "Alterado com sucesso";
		}
	}
?>