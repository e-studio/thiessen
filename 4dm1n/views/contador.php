<?php

//conf.php, archivo de configuración de la base de datos

include('conf.php');

//IP DEL VISITANTE

$ip = $_SERVER['REMOTE_ADDR'];

/*Seleccionamos la ip, la diferencia en tiempo entre la fecha actual y la almacenada

* en la base de datos, con la función de mysql TIMEDIFF(fecha de inicio, fecha final)

*/
$sql="select ip, TIMEDIFF(NOW(), fecha) as fecha, num_visitas from contador where ip='$ip'";

//Ejecutamos la instrucción SQL

//$rs=mysql_query($sql) or die("Problemas al ejecutar select SQL ".mysql_error());

$rs = $conn->query($sql);
$fila = $rs->fetch(PDO::FETCH_ASSOC);

/*Almacenados el resultado de la instrucción SQL en un arreglo asociativo con la función

mysql_fetch_array */

//$fila=mysql_fetch_array($rs);

$tiempo = $fila['fecha']; //Diferencia entre fecha guardada y fecha actual

$num_visitas=$fila['num_visitas']; //Número de visitas

$horas_t=substr($tiempo,0,2); //Número de horas transcurridas

$tiemRes = 1; //Varible de tiempo en horas para restringir la visita

/*Contamos el número de registros obtenidos en la consulta anterior, si el numero

* obtenido es igual a cero es porque dicho visitante es nuevo en el sito

* entonces agregamos su ip a la base de datos junto con un 1 y la fecha actual */



//$num_rows = $rs->fetchColumn();

if ($rs->fetchColumn()==0)


//if (mysql_num_rows($rs)==0)

{

$sql="insert into contador(ip, num_visitas, fecha) values('$ip', 1, NOW())";
$rs = $conn->query($sql);

//mysql_query($sql) or die("Problemas al ejecutar la insert SQL ".mysql_error());

}

/* Si el número de registros obtenidos es mayor a cero es porque dicho visitante ha vuelto a ingresar al

* sitio, y si su tiempo transcurrido es mayor a 1 hora desde la primera vez que ingreso

* entonces actualizamos su número de votos agregando sumando 1 al valor actual,

* tambien actualizamos la fecha de su ultimo ingreso a la fecha actual

* */

//Si la ip existe y han transcurrido 1hr

elseif ($rs->fetchColumn() > 0 && $horas_t > $tiemRes)

{

$sql="update contador set fecha=NOW(), num_visitas='$num_visitas'+1 where ip='$ip'";

$rs = $conn->query($sql);
//mysql_query($sql) or die("Problemas al ejecutar update SQL ".mysql_error());

}

$sql="select SUM(num_visitas) as suma from contador"; //Obtenemos la suma de todas las visitas
$rs = $conn->query($sql);
//$rs=mysql_query($sql) or die("Problemas al ejecutar select SQL ".mysql_error());

$fila = $rs->fetch(PDO::FETCH_ASSOC);   //Almacenanos el resultado de la consulta en un arreglo
//$fila=mysql_fetch_array($rs);

$num_visitas = $fila['suma']; //Número de visitas

$conn=null;
//mysql_close($link);

?>