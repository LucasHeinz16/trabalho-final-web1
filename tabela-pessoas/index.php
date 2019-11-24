<?php
session_start();

include 'conexao.php';
include 'header.php';

include 'menu.php';

if (!isset($_GET['pagina']))
    include 'listagem.php';
else
    include $_GET['pagina'] . '.php';

include 'footer.php';
