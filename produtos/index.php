<?php
require_once("servidor.php");
if(!empty($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<form action="listar.php" method="get" accept-charset="utf-8">
    Nome Produto<input type="text" name="nomeproduto"><br>
    Preço Produto<input type="text" name="preco"><br>
    Código Produto<input type="number" name="codigo">
    <input type="submit" name="enviar">
</form>

<a href="lista.php">Lista de produtos</a>