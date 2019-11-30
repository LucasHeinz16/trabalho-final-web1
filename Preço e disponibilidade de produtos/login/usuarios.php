<?php

class usuarios_cat_produtos
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        try {
            $this->pdo = new PDO(
                "mysql:dbname=" . $nome . ";host=" . $host,
                $usuario,
                $senha
            );
            $this->msgErro = "";
        } catch (PDOException $e) {
            $this->msgErro = $e->getMessage();
        }
    }
    public function cadastrar($nome, $email, $senha)
    {
        $sql = $this->pdo->prepare("SELECT id FROM usuarios_cat_produtos WHERE
        email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $this->pdo->prepare("INSERT INTO usuarios_cat_produtos(login, email, password) 
            VALUES (:n, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }
    public function logar($email, $senha)
    {
        $sql = $this->pdo->prepare("SELECT id FROM usuarios_cat_produtos WHERE
            email = :e AND password = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true;
        } else {
            return false;
        }
    }
}
