<div class="titulo">Consultar Registros</div>

<?php

require_once "conexao.php";

$sql = "SELECT id,nome,nascimento FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: ".$conexao->error;
}

print_r($registros);

$conexao->close();
?>

<table class="table">
    <thead>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Código</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro): ?>
            <tr>
                <td><?=  $registro['id']; ?></td>
                <td><?=  $registro['nome']; ?></td>
                <td>
                    <?=
                        date'd/m/Y',strtotime($registro['nascimento'])
                    ?>
                </td>
                <td><?=  $registro['email']; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem   ;
    }
</style>
