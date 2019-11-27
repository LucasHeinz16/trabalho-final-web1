<?php
$username = 'root';
$password = '';
$banco = 'pesquisa';

try {
    $con = new PDO('mysql:host=mysql;dbname='.$banco, 
    $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}