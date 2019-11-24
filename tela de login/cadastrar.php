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
    <div id="corpo-form-cad">
        <h1>Cadastre-se</h1>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
            <input type="email" name="email" placeholder="Usuario"maxlength="30">
            <input type="password"name="senha" placeholder="Senha" maxlength="40">
            <input type="password" name="confirmarsenha" placeholder="Confirmar Senha" maxlength="15">
            <input type="submit" value="CADASTRAR">
            <a href="cadastrar.php">Ainda nao é inscrito?<strong>Cadastre-se </strong></a>
        </form>
    </div>
    <?php
    // var_dump($_POST);
    if(isset($_POST['nome']))
    {
        $nome = addslashes($_POST['nome']);
        $email =addslashes($_POST['email']);
        $senha =  addslashes($_POST['senha']);
        $confirmarsenha =addslashes($_POST['confirmarsenha']);
        if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
        {
            $u->conectar("lucas","localhost","root","");
            if($u->msgErro == "")
            {   if($senha == $confirmarsenha)
                {
                    if($u->cadastrar($nome,$email,$senha))
                    {
                        echo "Cadastrado com sucesso!";
                    }
                    else
                    {
                        echo "email ja cadastrado";
                    }
                }
                else
                {
                    echo "Senhas nao sao iguais";
                }
            }
            else
            {
                echo "Erro: ".$u->msgErro;
            }
        }else
        {
            echo "Preecha todos os campos";
        }
    }

    ?>

</body>

</html>