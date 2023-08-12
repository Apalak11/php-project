<?php
	// add lesson code
	try{
		$conn = new PDO(dsn:'mysql:host=yourhost;dbname=yourdbname', username:'youruser', password:'yourpass');
		//set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
?>
