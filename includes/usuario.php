<?php 
require_once('pessoa.php');

class Usuario extends Pessoa {
  public $login;

  function __construct($nome,$idade,$login)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->login = $login;
    echo 'Usuario criado! <br>';
  }
  function __destruct()
  {
    echo 'Usuário diz: tchau!';
  }

  public function apresentar()
  {
    echo "@{$this->login}:";
    parent::apresentar();
  }

}