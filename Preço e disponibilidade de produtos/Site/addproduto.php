<?php
require_once("servidor.php");
if(!empty($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet"  href="css/estilo.css">
<form action="listar.php" method="get" accept-charset="utf-8">
   <h1>  &nbsp;<input class="input" type="text" name="nomeproduto" placeholder="Nome do Produto:"><br>
   &nbsp;<input class="input" type="text" name="preco" placeholder="Preço do Produto:"><br>
    &nbsp;<input class="input" type="number" name="codigo" placeholder="Código do Produto:">
    <input type="submit" name="enviar" class="btn btn-primary"> </h1>
</form>

<a href="lista.php" name="lista" class="btn btn-secondary">Lista de produtos</a>