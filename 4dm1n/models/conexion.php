<?php

class Conexion{

	public function conectar(){
		//conexion local
		$bd = "thiessen";
		$servername = "localhost";
		$username = "root";
		$password = "";
		//conexion Server
		// $bd = "multie5_thiessen";
		// $servername = "localhost";
		// $username = "multie5_thiessen";
		// $password = "d!)8)=69,7&U";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo '<script>alert("Connected successfully");</script>';
		    }
		catch(PDOException $e)
		    {
		    //echo '<script>alert("Connection failed: '.$e->getMessage().'");</script>';

		    }
		return $conn;

	}

}