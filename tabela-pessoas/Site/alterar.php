<?php
if (isset($_POST['alterar'])) {
    try {
        $stmt = $conn->prepare(
            'UPDATE pessoas SET nome = :nome WHERE id = :id'
        );

        $stmt->execute(array(
            'nome' => $_POST['nome'],
            'id' => $_GET['id']
        ));
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

if (isset($_GET['id'])) {
    $stmt = $conn->prepare('SELECT * FROM pessoas WHERE id = :id');
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
}

$stmt->execute();
$r = $stmt->fetchAll();

?>
<div class="alert alert-success" role="alert">
    Alterado com Sucesso!
</div>
<?php

?>
<form method="post">
    <input type="text" name="nome" value="<?= $r[0]['nome'] ?>">
    <input type="submit" name="alterar" value="Salvar" class="btn btn-success">
</form>