<?php
    include("servidor.php");

    $id = ($_GET['produto']);

    $sql_code ="DELETE FROM produto WHERE id = '$id'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    if($sql_query)
    {
        echo "<script> location.href='addproduto.php?p=inicial';</script>";
    }else{
        echo "<script> 
        alert('Nao foi possivel deletar');
        location.href='addproduto.php?p=inicial';
        </script>";
    }
?>
