<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'furniture';

	{
		$conn = new mysqli($host, $user, $pass, $db);

		if ($conn->connect_errno) {
			echo "Gagal Kone ke mysql". $conn->connect_error;
			exit;
		}
	}






?>
