<?php 

$string_as_json = '
	{
		"professor" : 
			{
				"ime" : "Neven",
				"prezime" : "Gjoreski",
				"godini" : 30,
				"jazici" : ["php", "SQL", "Javascript"]
			}
	}
';

$object_as_json = json_decode($string_as_json);

echo '<pre>';
print_r($object_as_json);
echo '</pre>';

echo '<pre>';
echo $object_as_json->professor->jazici[1];
echo '</pre>';

echo '<br>';

$array_as_json = json_decode($string_as_json, true);

echo '<pre>';
print_r($array_as_json);
echo '</pre>';

echo '<br>';

echo $array_as_json['professor']['jazici'][2];

echo '<br>';
echo '<br>';

$array_nekoj = [
	'ime'=>'Neven',
	'prezime'=>'Gjoreski',
	'godini'=>30
	];

$nekoj_json = json_encode($array_nekoj);

echo $nekoj_json;

?>