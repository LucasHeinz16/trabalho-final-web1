<?php
require_once("servidor.php");
if (isset($_GET['deletar'])) {
    try {
        $stmt = $conn->prepare(
            'DELETE FROM produtos WHERE id = :id'
        );

        $stmt->execute(array('id' => $_GET['id']));

        ?>
        <div class="alert alert-success" role="alert">
            Sucesso! O registro foi deletado.
        </div>
<?php
        exit();
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

if (isset($_GET['id'])) {
    $stmt = $conn->prepare('SELECT * FROM produtos WHERE id = :id');
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
}

$stmt->execute();
$r = $stmt->fetchAll();
?>
<form method="post">
    <input type="text" name="nome" value="<?= $r[0]['nome'] ?>" disabled>
    Deseja realmente excluír esse cadastro?
    <input type="submit" name="deletar" value="Confirmar" class="btn btn-warning">
</form>