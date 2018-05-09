<?php

	// conexao com o banco de dados
	require_once("conexao.php");

	$cpfCli = $_POST["cpfCli"];

	$stmt = $con->prepare("DELETE FROM cliente where cpf = ? ");

	$stmt->bindParam(1,$cpfCli);

	$stmt->execute();

?>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
		<body>
			<form class="form-horizontal" action="pesquisa_Cli.php" method="POST"> 
				<div class="container">
		  			<div class="form-group">
			   			<h1  class="col-md-6">PEDIDO EXCLUÍDO!</h1> 
			  		</div>
			  		<div class="form-group">
				  		<div class="col-md-6">
						<a href="index.php">
							<button type="button" class="btn btn-info">VOLTAR</button>
						</a>
						<a href="pesquisa_Cli.php">
							<button type="submit" class="btn btn-danger">CONSULTAR</button>
						</a>							
						</div> 
					</div>
				</div>
			</form>
		</body>
</html>