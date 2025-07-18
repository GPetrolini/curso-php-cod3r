<div class="titulo">Escrever arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteudo");
fclose($arquivo);

$arquivo = fopen('texte.txt', 'a');
fwrite($arquivo, "com novo valores\n");
fwrite($arquivo, "adicionamos em um segundo momento\n");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');
fclose ($arquivo);
