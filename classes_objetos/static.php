<div class="titulo">Membros Estáticos</div>
<?php

class A {
  public $naoStatic = 'Variável de instância';
  public static $static = ' Variável de classe (estática)';

  public function mostrarA() {
    echo "Não estática = {$this->naoStatic}<br>";
    // Tentativa 1
    // echo "Estática = {$this->static}<br>";
    // Tentativa 2 
    //echo "Estática = {self::static}<br>";
    echo "Estática" . self::$static . "<br>";
  }

  public static  function mostrarStatic() {
    // echo "Não estático = {$this->naoStatic}<br>";
    // echo "Estático = {$static}<br>";
    echo "Estática" . self::$static . "<br>";
  }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStatic(); // não é a forma ideial

echo '<br>';
echo A::$static, '<br>'; // acessar diretamente pela classe
A::mostrarStatic(); 