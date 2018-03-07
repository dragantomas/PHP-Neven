<?php 

// echo '<h1>Успешна навигација</h1>';

$validuser = 'asd';
$validpass = 'asd';

if($validuser === $_POST['username'] && $validpass === $_POST['password']){
	echo '<h1>Логиран си</h1>';
}

 ?>


