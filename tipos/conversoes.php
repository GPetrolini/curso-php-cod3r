<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
vd(PHP_INT_MAX + 1);
echo '<br>';
vd(1 + 1.0);
echo '<br>';
vd((float)3);

// float para int
echo '<p> Float para int </p>';
vd((int)6.8);
echo '<br>';
vd(intval(2.88888));
echo '<br>';
vd(round(2.8));

//operações com string
echo '<p>Strings</p>';
vd(3+ "2");
echo '<br>';
vd("3" + 2)/
echo '<br>';
vd("3" . 2);
echo '<br>';
echo '<br>', is_string("3". 2)
echo '<br>', is_string("3" +2);
echo '<br>';
vd(1 + "cinco")
echo '<br>';
vd(1 + "5 cinco");

