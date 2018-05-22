<?php 

if(isset($_GET['action']) && $_GET['action'] === 'new') {
?>

<form action="?" method="POST">
	<input type="hidden" name="action" value="insert">
	Firstname : 
	<input type="text" name="firstname" id="firstname">
	<br>
	Lastname : 
	<input type="text" name="lastname" id="lastname">
	<br>
	Email : 
	<input type="email" name="email" id="email">
	<br>
	Password : 
	<input type="password" name="password" id="password">
	<br>
	<input type="submit" value="Submit">
</form>

<?php

} elseif (isset($_POST['action']) && $_POST['action'] === 'insert') {

	$config = file_get_contents('../../config.json');
	$config_decoded = json_decode($config);

	$conn_string = $config_decoded->database->config;
	$conn_username = $config_decoded->database->username;
	$conn_password = $config_decoded->database->password;

	$db = new PDO($conn_string, $conn_username, $conn_password);

	// print_r($_POST);

	$sql = "INSERT INTO USERS (firstname, lastname, email, password)

			VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]')";

	$result = $db->query($sql);

	if($result) {
		header("Location: /PHP-Neven/CMS/admin/users.php");
		echo 'Uspesen insert'; 
	} else {
		echo 'Neuspesen insert';
	}

}

?>

