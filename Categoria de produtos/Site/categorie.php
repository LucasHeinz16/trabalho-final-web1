<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Adicionar Produtos</title>
</head>
<div class="compl">
<h1>
	Listagem de Produtos <br><br>
</h1>
<form action='categorieAdd.php' method='POST' enctype='multipart/form-data'>
<input class="figura" type='file' name='Figura' id='Figura' /><br /><br>
	Categoria:&nbsp;<input type='text' name='NomeCategoria' placeholder="Categoria do Produto" /><br /><br>
	Descrição:&nbsp;<input type='text' name='Descricao' placeholder="Descrição do Produto" /><br /><br>
	
	<input type='submit' class="btn btn-success"/>
	<a href="categorieList.php" class="btn btn-primary">Ver Lista</a>
</form>
</div>
