<div class="titulo">Métodos mágicos</div>

<?php
class Pessoa {
  public $nome;
  public $idade;

  function __construct($nome, $idade)
  {
    echo ' Construtor invocado!<br>';
    $this->nome = $nome;
    $this->idade = $idade;
  }

  function __destruct()
  {
    echo 'E morreu!';
  }

  public function __toString()
  {
    return "{$this->nome} tem {$this->idade} anos.";
  }

  public function apresentar() {
    echo $this . "<br>";
  }

  public function __get($atrib) {
    echo "Lendo atributo não declarado: {$atrib}<br>";
  }
  public function __set($atrib, $valor) {
    echo "Alterando o atributo não declarado: {$atrib}/{$valor}<br>";
  }
  public function __call($metodo, $params) {
    echo "Tentando executar método '${metodo}'";
    echo ", cini is parametros:";
    print_r($params);

  }
}

$pessoa = new Pessoa ('Ricardo', 40); // __construct
$pessoa->apresentar(); // chamando o __toString
echo $peesoa, '<br>'; // chamando o __toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar(); // chamando o __toString

$pessoa->nomeCompleto = 'Muito legal!!!'; // __set
$pessoa->nomeCompleto; // __get
echo $pessoa->nome; // acessa o atributo diretamente sem __get

$pessoa->exec(1, 'teste', true, [1,2,3]); // __call pq o método não existe no objeto

$pessoa = null; // __destruct