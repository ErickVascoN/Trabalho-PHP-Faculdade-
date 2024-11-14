<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastro de Propriedades</h2>
	<a href="adicionarprop.php"><button>Adicionar</button></a>
	<a href="pesquisarprop.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="400">
		<tr>
			<th>Id</th>
			<th>Propriedade</th>
			<th>Proprietario</th>
			<th>Area</th>
			<th>Cultura</th>
		</tr>
		
		<?php 
			
			require("..\config.php");
		
			$query = $mysqli->query("select * from propriedade");
			echo $mysqli->error;

			while ($tabela = $query->fetch_assoc()){
				echo "
				<tr><td align='center'>$tabela[idprop]</td>
				<td align='center'>$tabela[propriedade]</td>
				<td align='center'>$tabela[proprietario]</td>
				<td align='center'>$tabela[area]</td>
				<td align='center'>$tabela[cultura]</td>
			

				<td width='120'><a href='excluirprop.php?excluir=$tabela[idprop]'>[excluir]</a>
				<a href='alterarprop.php?alterar=$tabela[idprop]'>[alterar]</a></td>
				</tr>
			";}
		?>
	</table>
</body>
</html>