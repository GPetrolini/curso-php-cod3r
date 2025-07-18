<?php

class Pessoa {
  public $nome;
  public $idade;

  function __construct($nome, $idade)
  {
    $this-> $nome;
    $this-> $idade;
    echo 'Pessoa criada! <br>';
  }

  function __destruct()
  {
    echo 'Tchau!';
  }

  public function apresentar () {
    echo "{$this->nome}. {$this->idade} anos <br>";
  }
}