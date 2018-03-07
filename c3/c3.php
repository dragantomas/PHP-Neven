<h1>Navigacija 1</h1>

<a href="test.php">Nav 1</a>

<h1>Navigacija 2</h1>

<a href="?test=da">Nav 2</a>

<h1>Navigacija 3</h1>

<input type="button" value="Копче" onclick="nav()">

<br>

<script type="text/javascript">
	
	function nav(){
		document.location = 'test.php';
	}

</script>

<h1>Navigacija 4</h1>

<form action='test.php'>
	<input type="submit" name="">
</form>

<h1>Forma</h1>

<form action='test.php' method="POST">
	<input type="text" name="username">
	<br><br>
	<input type="password" name="password">
	<br><br>
	<input type="submit" name="Submit">
</form>


<?php 


// navigacija 2

if(isset($_GET['test']) && $_GET['test'] == 'da'){
	header('Location: test.php');
}

?>
