<?php 

$default = [
	"controller" => "users",
	"method" => "getUsers",
	"input" => ""
];

// print_r($_GET);

// echo '<br>';

$params = [];



// print_r($params);

// echo '<br>';

// controler

// metoda od kontrolerot

// dopolnitelni parametri

if(isset($_GET['params'])) {

	$params = explode('/',$_GET['params']);

	// $controller_name = $params[0];

	// $method_name = $params[1];

	// $input = $params[2];

}


switch(count($params)){
	case 0:
		$controller_name = $default['controller'];
		$method_name = $default['method'];
		$input = $default['input'];
		break;
	case 1:
		$controller_name = $params[0];
		$method_name = $default['method'];
		$input = $default['input'];
		break;
	case 2:
		$controller_name = $params[0];
		$method_name = $params[1];
		$input = $default['input'];
		break;
	case 3:
		$controller_name = $params[0];
		$method_name = $params[1];
		$input = $params[2];
		break;
	default:
		die("Vnesovte premnogu parametri");
		break;
}


$filename_c = "controllers/{$controller_name}.php";
$filename_m = "models/{$controller_name}.php";
 
if(file_exists($filename_c) && file_exists($filename_m)){
	// echo 'Ima takov kontroler';

	include($filename_c);
	include($filename_m);

	$object = new $controller_name;

	if(method_exists($object, $method_name)){
		$object->$method_name($input);
	} else {
		echo '<br>';
		echo 'Nema takva metoda!';
	}
} else {
	echo 'Nema takov kontroler ili model';
}



?>