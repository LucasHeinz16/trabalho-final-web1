<?php
require_once "conexao.php";

?>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset-utf-8">
    <title>Document</title>
</head>

<body>
    <h1>Pesquisa;</h1>

    <form name="fcad" action="processa.php" method="GET">
        <label>Nome:</label><br>
        <input type="text" name="fnome"><br><br>

        <label>Selecione seu estado:</label><br>
        <select name="fuf">
            <?php
            $sql = "SELECT * FROM tb_uf order by uf";
            $res = mysqli_query($conn, $sql);
            while ($vreg = mysqli_fetch_row($res)) {
                $vuf = $vreg[1];
                $vsigla = $vreg[0];
                echo "<option value=$vsigla>$vuf</option>";
            }
            ?>
        </select>
        <br><br>

        <label>Selecione seus meios de transporte favoritos:</label><br>
        <br>
        <?php
        $sql = "SELECT * FROM tb_transportes";
        $res = mysqli_query($conn, $sql);
        while ($vreg = mysqli_fetch_row($res)) {
            $vcod = $vreg[0];
            $vtra = $vreg[1];
            echo "<input type=checkbox name=ftransp[] value=$vcod>$vtra<br/>";
        }
        ?>
        <input type="submit" value="Gravar Pesquisa">

    </form>



