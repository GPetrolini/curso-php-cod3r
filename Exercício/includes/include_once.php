<div class="titulo">INclude Once</div>

<?php
ini_set('display_erros', 1);
include('include_once_arquivo.php');
require('include_once_arquivo.php');

echo "Variavel = '{$variavel}' . <br>";
$variavel = 'Variável alterada';
echo "Variavel = '{$variavel}' . <br>";

include('include_once_arquivo.php');
echo "Variavel = '{$variavel}' . <br>";
$variavel = 'Variável alterada';
echo "Variavel = '{$variavel}' . <br>";

include_once('include_once_arquivo.php');
echo "Variavel = '{$variavel}'.<br>";

require_once('include_once_arquivo.php');
echo "Variavel = '{$variavel}'.<br>";