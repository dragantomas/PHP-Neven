<?php

echo "raboti"; 

$ime = "Stavre";

echo '<br/>';
echo '<br/>';

echo $ime;

echo '<br/>';
echo '<br/>';

$ime = 24;

echo $ime;

echo '<br/>';
echo '<br/>';

// aritmeticki operatori

$i = 1;

$p = 2;

echo $i + $p;

echo '<br/>';
echo '<br/>';

$rezultat = $i + $p;

echo $rezultat;

$i = $i + $p;

$i += $p;

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

?>

<div>
	<h1><?php echo $i; ?></h1>
</div>
<p>Ova e html</p>

<?php 

$i = "5121312";

var_dump($i);

echo '<br/>';
echo '<br/>';

// Ternary operator

if ($i % 2 == 0){
echo 'paren';
} else {
	echo 'neparen';
}

echo '<br/>';
echo '<br/>';

echo ($i % 2 == 0) ? 'paren' : 'neparen';

$niza = array('Stanko', 'Pero', 'Janko');

$array = array('Stanko', 132, false);

echo '<br/>';

// echo $array;

var_dump($array);

echo '<br/>';

for ($brojac = 1; $brojac <= 5; $brojac++){
	echo $brojac . '<br/>' ;
}

 ?>