<?php
session_start();

// if (!isset($_SESSION['id'])) {
//     header("location: ../tabela-pessoas/index.php");
// }


include 'conexao.php';
include 'header.php';

include 'menu.php';

if (!isset($_GET['pagina']))
    include 'listagem.php';
else
    include $_GET['pagina'] . '.php';

