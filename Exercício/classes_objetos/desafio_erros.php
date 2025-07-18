<div class="titulo">Desafio Erros</div>

<?php

interface Template {
  function metodo1();
  public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {    // antes de arrumar: extends 
  public function metodo3() {
    echo "estou funcionando";
  }
}

class Classe extends ClasseAbstrata { // antes de arrumar: implements
  function __construct($parametro) {
    
  }
  public function metodo1(){

  }
  public function metodo2($parametro){

  }
}
 
$exemplo = new Classe('...');   // antes estava sem o 'new" e sem passar o parametro
$exemplo->metodo3(); // antes estava concatenando com um "." 