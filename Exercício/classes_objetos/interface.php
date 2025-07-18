<div class="titulo">Interface</div>

<?php
interface Animal {
  function respirar();
}

interface Mamifero {
  function mamar();
}

interface Canino extends Animal, Mamifero {
  function latir(): string;
}

class cachorro implements Canino {
  function respirar()
  {
    echo "Irei usar oxigenio!<br>";
  }

  function latir(): string {
    return " auau";
  }
  function mamar() {
    return "Irei mamar";
  }
}

$animal = new Cachorro();
echo $animal->respirar();
echo $animal->latir();
echo $animal->mamar();

echo '<br>';
var_dump($animal);

echo '<br>';

var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
