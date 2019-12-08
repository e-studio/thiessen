<?php
// Conexion Local
//$bd = "thiessen";
//$servername = "localhost";
//$username = "root";
//$password = "";


//conexion Server
  $bd = "multie5_thiessen";
  $servername = "localhost";
  $username = "multie5_thiessen";
  $password = "d!)8)=69,7&U";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>