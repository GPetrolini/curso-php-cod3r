<div class="titulo">Op. aritiméticas</div>

<?php
echo 1 + 1, '<br>';                 // 2
var_dump(1 + 1);                    // int(2)
echo '<br>';                   
echo 1 + 2.5, '<br>';               // 3.5
echo 10 - 2, '<br>';                // 8
echo 2 * 5, '<br>';                 // 10
echo 7 / 4, '<br>';                 // 1.75
echo intdiv(7, 4), '<br>';          // 1
echo round(7 / 4), '<br>';          // 2
echo 7 % 4, '<br>';                 // 3
echo 7 % 2, '<br>';                 // 1
echo 8 % 4, '<br>';                 // 0
echo 7 / 0, '<br>';                 // INF
// echo intdiv(7, 0);               // erro
echo 4 ** 2, '<br>';                // 16

// Precedência de operadores

// () => ** => / * % >= = -         // ordem das operações
echo '<p>Precedencia</p>';    
echo 2 + 3 * 4, '<br>';             // 14
echo (2 + 3) * 4, '<br>';           // 20
echo ((2 + 3 )* 4 ) ** 2, '<br>';   //400