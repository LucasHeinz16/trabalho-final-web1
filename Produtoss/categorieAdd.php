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
		$figura = 'data:'.$_FILES['Figura']['type'].';base64,'.base64_encode(file_get_contents($_FILES['Figura']['tmp_name']));
		$dataStmt = $con->prepare('INSERT INTO categorias (NomeCategoria, Descricao, Figura) VALUES (?,?,?)');
		
		$dataStmt->execute([$_POST['NomeCategoria'], 
			$_POST['Descricao'], 
			$figura]);
	}
	header('Location: categorieList.php');
?>