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

		$dataStmt = $con->prepare('SELECT * FROM categorias WHERE IDCategoria = ?');
		$dataStmt->execute([$_POST['IDCategoria']]);
		$data = $dataStmt->fetch(PDO::FETCH_ASSOC);
		echo '<form action="categorieUpdate.php" method="POST" enctype="multipart/form-data">
			 Id:<input type="text" readonly="readonly" name="IDCategoria" value="' . $_POST['IDCategoria'] . '"/><br/>
			Categoria:<input type="text" name="NomeCategoria" value="' . $data['NomeCategoria'] . '"/><br/>
			Descrição:<input type="text" name="Descricao" value="' . $data['Descricao'] . '"/><br/>
			<input type="submit"/>
		</form>';
	}
?>