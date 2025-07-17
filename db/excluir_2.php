<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir #02</div>

<?php
require_once('conexao.php');

$registro = [];
$conexao = novaConexao();

if($_GET["excluir"]){
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET["excluir"]);
    $stmt->execute();
}

$sql = "SELECT id,nome,email,nascimento FROM cadastro";
$resultado = $conexao->query($sql);
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registro[] = $row;
    }
} elseif($conexao->connect_error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>

<table class="table table-hover table-striped" >
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registro as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['Email'] ?></td>
                <td><?= $registro['nascimento'] ?></td>
                <td>
                    <a href="/exercicio.php?dir=db&file=excluir_2$exluir=<?= $registro['id']?>"
                        class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>