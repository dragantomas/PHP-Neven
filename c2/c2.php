<?php 

$arr1 = [];
$arr1 = array();

$array[] = "asd";
print_r($array);

echo '<br>';

$filmovi = [
	'Godfather' => '1987',
	'Alien' => '1982',
	'Blade Runner' => '1975',
];

$knigi = [
	'Gospodar na zloto' => '2015',	
	'Gospodar na dobroto' => '2013',	
	'Gospodarot' => $filmovi,
];

var_dump($knigi);
echo '<br>';

echo'<pre>';
print_r($knigi);
echo'<pre>';

echo '<br>';

echo $knigi['Gospodarot']['Alien'];

echo '<br>';

$pr = '123';
echo 'asd$pr';
echo '<br>';

echo "asd$pr";
echo '<br>';

echo "aasd {$knigi['Gospodarot']['Alien']}";
echo '<br>';

// dolnive se identicni
$pr1 = ['eden', 'dva', 'tri'];
$pr2 = [0 => 'eden', 1 => 'dva', 2 => 'tri'];

$pr_break = ['eden', 'dva', 'tri', 'cetiri', 'pet', 'sest', 'sedum'];

for($i=0; $i < count($pr_break); $i++) {
	echo $pr_break[$i]. '<br>';
}
echo '<br>';

foreach ($pr_break as $value) {
	echo $value.'<br>';
}

echo '<br>';

// primer break
// isprintaj 2 elementi, pa isprintaj done i zavrsi so printanje

$elementi_isprintani = 0;
foreach ($pr_break as $value) {
	echo $value.'<br>';
	$elementi_isprintani ++;
	if($elementi_isprintani == 2){
		echo 'done';
		break; // kraj na site komandi
	}
}

echo '<br>';
echo '<br>';


// primer continue - go skoka ostatokot od taa iteracija i vleguva vo narednata
// isprintaj 1 element, skokni 2, isprintaj 3 i zavrsi so printanje

$elementi_isprintani = 0;
foreach ($pr_break as $value) {
	$elementi_isprintani ++;
	if($elementi_isprintani % 2 == 0){
		continue; // naredbata prodolzuva so slednata iteracija, ne slednata komanda
	}
	echo $value.'<br>';
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



?>