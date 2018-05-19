<?php
	//arquivo de conexão
	$conn = "mysql:host=localhost;dbname=phppdo";

	try {

		$db = new PDO($conn, 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {
		echo $e->getMessage();
	}

?>
