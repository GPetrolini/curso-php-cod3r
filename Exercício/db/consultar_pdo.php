<div class="titull">PDO: Consultar</div>

<?php
require_once 'conexao_pdo.php';

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo "<hr>";

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";
//$sql = "SELECT * FROM cadastro LIMIT ? OFFSET ?";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde,',2, PDO::PARAM_INT);
$stmt->bindValue(':inicio,',3, PDO::PARAM_INT);

if ($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "C�digo:" . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 14 , PDO::PARAM_INT);
//if($stmt->bindValu(':id', 15);
//if($stmt->execute(["14"])){
//if($stmt->execute()){
if($stmt->execute([14])){
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "C�digo:" . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close();
