<?php
		$bd = "thiessen";
		$servername = "localhost";
		$username = "root";
		$password = "";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo "Connected successfully";
		    echo '<script>alert("Connected successfully");</script>';
		    }
		catch(PDOException $e)
		    {
		    //echo "Connection failed: " . $e->getMessage();
		    echo '<script>alert("Connection failed: '.$e->getMessage().'");</script>';

		    }
?>