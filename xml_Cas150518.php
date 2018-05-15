<?php 

$string_as_xml = "

<professor>
	<ime>Neven</ime>
	<prezime>Gjoreski</prezime>
	<godini>30</godini>
</professor>

";

$object_as_xml = simplexml_load_string($string_as_xml);

echo '<pre>';
print_r($object_as_xml);
echo '</pre>';



echo '<pre>';
echo $object_as_xml->prezime;
echo '</pre>';
echo '<br/>';

// PODOLG XML

$string_as_xml = "
	<profesori>
		<professor>
			<ime>Neven</ime>
			<prezime>Gjoreski</prezime>
			<godini>30</godini>
		</professor>
		<professor>
			<ime>Bojan</ime>
			<prezime>Gavrovski</prezime>
			<godini>32</godini>
		</professor>
		<professor>
			<ime>Petar</ime>
			<prezime>Petrovski</prezime>
			<godini>32</godini>
		</professor>
		<professor>
			<ime>Goran</ime>
			<prezime>Stojanovski</prezime>
			<godini>32</godini>
		</professor>
	</profesori>
";

$object_as_xml = simplexml_load_string($string_as_xml);

echo '<pre>';
print_r($object_as_xml);
echo '</pre>';

echo '<pre>';
echo $object_as_xml->professor[1]->prezime;
echo '</pre>';
echo '<br/>';
echo '<br/>';


//  nacin 1

$to_echo = '';

foreach ($object_as_xml as $professor) {
	$to_echo .= $professor->ime . ', ';
}

echo rtrim($to_echo, ', ');

echo '<br/>';

// nacin 2

$to_arr = [];

foreach ($object_as_xml as $professor) {
	$to_arr[]= $professor->ime;	
}

echo implode(', ', $to_arr);

echo '<br/>';


?>