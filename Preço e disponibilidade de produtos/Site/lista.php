<?php
require_once("servidor.php");
$comando = "SELECT * FROM produtos ORDER BY id DESC";
$enviar = mysqli_query($conn, $comando);
$resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>
<table class="table table-dark table-striped table-bordered table-hover table-sm">
    <tr>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Disponibilidade</th>
    </tr>
    <?php
    foreach($resultado as $produto){
        $codigo=$produto['codigo'];
        $nome=$produto['nome'];
        $preco=$produto['preco'];
        $disponibilidade=$produto['disponibilidade'];
        if($disponibilidade=="1"){
            $disponibilidade="Disponivel";
    }else{
        $disponibilidade="Indisponivel";
    }
    ?>
    <tr>
        <td><?=$codigo?></td>
        <td><?=$nome?></td>
        <td><?=$preco?></td>
        <td><?=$disponibilidade?></td>
    </tr>
<?php
    }
?>
</table>
<a href="addproduto.php" class="btn btn-secondary">Cadastrar produtos</a>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">