<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
  abstract public function metodo1();

  final public function metodo2() {
    echo "não vou mudar!<br>";
  }
}

class Classe extends Abstrata {
  public function metodo1(){
    echo 'Executando método 1<br>';
  }
  // public function metodo2(){
  //   echo "extendendo metodo 2<br>";
  // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica {
  public $att = 'Valor';
}

$unica = new Unica();
echo $unica->att;

// class Duplicata extends Unica {
//   public $att2;
// }