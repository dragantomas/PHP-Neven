<?php 

$iminja = [
	"Janko" => "Jankovski",
	"Petar" => "Petrovski",
	"Nikola" => "Nikolovski",
	"Stavre" => "Stavrevski",
	"Dragana" => "Tomanovskaasdasdasdasd",
	"Kristijan" => "Gjorevski"
];

// Najgolemo ime i prezime

$maxChars = 0;

foreach ($iminja as $ime => $prezime) {
	if(strlen($ime) + strlen($prezime) > $maxChars) {
	$maxChars = strlen($ime) + strlen($prezime);
	$maxName = " $ime $prezime e najdolgo ime i prezime";
	}
}

echo $maxName;

echo '<br/>';

echo $maxName . " i e dolgo $maxChars karakteri";

echo '<br/>';

$range = range(0,10);
var_dump($range);

// suma

$suma = 0;

foreach ($range as $i) {
	$suma = $suma + $i;
}

echo $suma;

//  MVC MODEL VUE CONTROLER


?>