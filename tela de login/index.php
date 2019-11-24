<?php
require_once 'classes/usuarios.php';
$u = new Usuarios;
?>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="POST">
            <input type="email" name="email" placeholder="Usuario">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="ACESSAR">
            <a href="cadastrar.php">Ainda nao é inscrito?<strong>Cadastre-se </strong></a>
        </form>
    </div>
    <?php
    if(isset($_POST['email']))
    {
        $email = addslashes($_POST['email']);
        $senha =  addslashes($_POST['senha']);
        
        if(!empty($email) && !empty($senha))
        {
            $u->conectar("lucas","localhost","root","");
            if($u->msgErro == "")
            {
                if($u->logar($email,$senha))
                {
                    header("location: areaprivada.php");
                }
                else
                {
                    echo "Email ou senha incorretos!";
                }
            }
            else
            {
                echo "Erro: ".$u->msgErro;
            }
        }else
        {

        }
        

    }
    ?>
</body>

</html>