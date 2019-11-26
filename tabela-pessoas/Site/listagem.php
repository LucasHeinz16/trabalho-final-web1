<?php
if (isset($_GET['id']))
    $id = $_GET['id'];

try {
    if (isset($id)) {
        $stmt = $conn->prepare('SELECT * FROM pessoas WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    } else {
        $stmt = $conn->prepare('SELECT * FROM pessoas');
    }
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>
    <table border="1" class="table table-striped">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Ação</td>
        </tr>
        <?php
            if (count($result)) {
                foreach ($result as $row) {
                    ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nome'] ?></td>
                    <td>
                        <a href="?pagina=alterar&id=<?= $row['id'] ?>" class="btn btn-danger">Alterar</a>
                        <a href="?pagina=deletar&id=<?= $row['id'] ?>" class="btn btn-danger">Excluír</a>
                    </td>
                </tr>
        <?php
                }
            } else {
                echo "Nenhum resultado retornado.";
            }
            ?>
    </table>
<?php
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
