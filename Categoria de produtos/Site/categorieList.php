<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
try {
	$dbName = 'lucas';
	$dbPass = '';
	$dbUser = 'root';
	$dbHost = 'localhost';
	$dbPort = '3306';
	$con = new PDO('mysql:dbname=' . $dbName . ';host=' . $dbHost . ':' . $dbPort, $dbUser, $dbPass);
} catch (Throwable $e) {
	die('<p>' . $e->getMessage() . '</p>');
}
if (isset($_POST['action']) && $_POST['action'] === 'delete' && (int) $_POST['IDCategoria'] > 0) {
	$deleteStmt = $con->prepare('DELETE FROM categorias WHERE IDCategoria = ?');
	$deleteStmt->execute([(int) $_POST['IDCategoria']]);
}

// echo '<a href="categorie.php" >Adicionar Categoria</a>';

$dataStmt = $con->prepare('SELECT * FROM categorias');
$dataStmt->execute();

echo '<table border="1" class="table table-striped"><tr><th>IDCategoria</th><th>NomeCategoria</th><th>Descricao</th><th>Figura</th></tr>';

while ($data = $dataStmt->fetch(PDO::FETCH_ASSOC)) {
	echo '<tr><td>' . $data['IDCategoria'] .
		'</td><td>' . $data['NomeCategoria'] .
		'</td><td>' . $data['Descricao'] .
		'</td><td><img src="' . $data['Figura'] . '"/>' .
		'</td><td><form action="categorieList.php" method="POST">' .
		'<input type="hidden" value="' . $data['IDCategoria'] . '" name="IDCategoria" >' .
		'<input type="hidden" value="delete" name="action" >' .
		'<input type="submit" class="btn btn-danger" value="deletar" /></form>' .
		'</td></tr>';
}
echo '</table>';
echo '<a href="categorie.php" class="btn btn-primary" >Adicionar Categoria</a> </br></br>';
echo '<a href="categorieEdit.php" class="btn btn-primary" >Editar</a>';
