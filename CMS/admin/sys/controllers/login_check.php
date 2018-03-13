<?php

$file_content = file_get_contents('../../test.txt');

$login_content = json_decode($file_content, true); // PRAVI ARRAY

$login_content_obj = json_decode($file_content); // PRAVI OBJECT 



// print_r($login_content_obj);

// print_r($login_content);

// echo '<br/>';
// echo '<br/>';

// echo $login_content['admin']['username']; // OD NIZA
// echo $login_content['admin']['username']; // OD NIZA

$username = $login_content_obj->admin->username; // OD OBJEKT
$password = $login_content_obj->admin->password; // OD OBJEKT

// $username = $login_content['admin']['username'];
// $password = $login_content['admin']['password'];

if($username == $_POST['loginEmail'] && $password == $_POST['loginPassword'] ) {

header('location: ../../index.php');

} else {

header('location: ../../login.php?login=error');

}
	




?>