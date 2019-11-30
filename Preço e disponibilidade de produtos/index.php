<?php
require_once 'login/usuarios.php';
$u = new usuarios_cat_produtos;
?>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="login/style.css">
    
</head>

<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="POST">
            <input type="email" name="email" placeholder="Usuario">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="ACESSAR">
            <a href="login/cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se </strong></a>
        </form>
    </div>
    <?php
    if (isset($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha =  addslashes($_POST['senha']);

        if (!empty($email) && !empty($senha)) {
            $u->conectar("lucas", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($u->logar($email, $senha)) {
                    header("location: site/addproduto.php");
                } else {
                    ?>
                    <div class="msg-erro">Email ou senha incorretos!</div>
    <?php
                }
            } else {
                echo "Erro: " . $u->msgErro;
            }
        } else { }
    }
    ?>
</body>

</html>