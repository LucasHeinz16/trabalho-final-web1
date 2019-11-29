<?php
	if(isset($_POST)){
		try {
			$dbName = 'lucas';
			$dbPass = '';
			$dbUser = 'root';
			$dbHost = 'localhost';
			$dbPort = '3306';
			$con = new PDO('mysql:dbname=' . $dbName . ';host=' . $dbHost . ':' . $dbPort, $dbUser, $dbPass);
		} catch(Throwable $e) {
			die('<p>' . $e->getMessage() . '</p>');
		}
		$dataStmt = $con->prepare('UPDATE categorias set NomeCategoria = ?, Descricao = ?');
		
		$dataStmt->execute([$_POST['NomeCategoria'], 
			$_POST['Descricao']]);
	}
	header('Location: categorieList.php');
?>