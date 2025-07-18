<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro (nome,email,nascimento,site,filhos,salario)
VALUES ('Gustavo', 'gusta1234@gmail.com', '1997-07-24',http://gustavindoxesque.com.br,0,5000)";

$conexao = novaConexao();
//print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}