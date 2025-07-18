<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome,nascimento,email,site,filhos,salario)
VALUES (
    'Gustavo',
    '1952-10-29',
    'gustavinhodocreu@yahoo.com.br',
    'https://gustavin123xqdl.com.br',
    0,
    20000
)";

$conexao = novaConexao();;
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Banco criado com sucesso!";
} else {
    echo "Erro:" . $conexao->error;
}

$conexao->close();