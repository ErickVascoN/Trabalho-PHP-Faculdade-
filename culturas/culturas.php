<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastro de Culturas</h2>
	<a href="adicionarcult.php"><button>Adicionar</button></a>
	<a href="pesquisarcult.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="400">
		<tr>
			<th>Id</th>
			<th>Cultura</th>
			<th>Variedade</th>
			<th>Ciclo</th>
			<th>Colheita</th>
		</tr>
		
		<?php 
			
			require("..\config.php");
		
			$query = $mysqli->query("select * from culturas");
			echo $mysqli->error;

			while ($tabela = $query->fetch_assoc()){
				echo "
				<tr><td align='center'>$tabela[idcultura]</td>
				<td align='center'>$tabela[cultura]</td>
				<td align='center'>$tabela[variedade]</td>
				<td align='center'>$tabela[ciclo]</td>
				<td align='center'>$tabela[colheita]</td>
			

				<td width='120'><a href='excluircult.php?excluir=$tabela[idcultura]'>[excluir]</a>
				<a href='alterarcult.php?alterar=$tabela[idcultura]'>[alterar]</a></td>
				</tr>
			";}
		?>
	</table>
</body>
</html>