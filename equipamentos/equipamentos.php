<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastro de Equipamentos</h2>
	<a href="adicionarequipe.php"><button>Adicionar</button></a>
	<a href="pesquisarequipe.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="400">
		<tr>
			<th>Id</th>
			<th>Equipamento</th>
			<th>Localizacao</th>
			<th>Custo</th>
			<th>Marca</th>
		</tr>
		
		<?php 
			
			require("..\config.php");
		
			$query = $mysqli->query("select * from equipamentos");
			echo $mysqli->error;

			while ($tabela = $query->fetch_assoc()){
				echo "
				<tr><td align='center'>$tabela[idequipe]</td>
				<td align='center'>$tabela[equipamento]</td>
				<td align='center'>$tabela[localizacao]</td>
				<td align='center'>$tabela[custo]</td>
				<td align='center'>$tabela[marcamodelo]</td>
			

				<td width='120'><a href='excluirequipe.php?excluir=$tabela[idequipe]'>[excluir]</a>
				<a href='alterarequipe.php?alterar=$tabela[idequipe]'>[alterar]</a></td>
				</tr>
			";}
		?>
	</table>
</body>
</html>