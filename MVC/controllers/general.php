<?php 

	class General {

		public $db;

		function __construct(){

			$config = file_get_contents('config.json');
			$config_decoded = json_decode($config);
			$conn_string = $config_decoded->database->config;
			$conn_username = $config_decoded->database->username;
			$conn_password = $config_decoded->database->password;

			$this->db = new PDO($conn_string, $conn_username, $conn_password);

		}

		public static function getWeather(){

			$apiKey = 'e8b5e755995d25633d3ae9f52219fd0c';
			$url = "http://api.openweathermap.org/data/2.5/weather";
			$params = "?q=sofia&mode=html&appid=$apiKey";

			return file_get_contents($url . $params);

		}

	}
	


 ?>