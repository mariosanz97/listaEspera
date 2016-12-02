
<?php
// Conecto con la BBDD
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "listaespera";
$conn = new mysqli ( $servername, $user, $password, $dbname );

if ($conn->connect_error) {
	die ( "Error: " . $conn->connect_error );
} else
//echo "Conexión con BBDD correcta";
// EN abierta si es 0 no esta respondida


$date = date( 'Y-m-d H:i:s');
//echo $date;

$usuario = $_POST['usuario']; 
$pregunta = $_POST['pregunta'];

/*
$d = $_POST['json'];
$json = (json_decode($d, true));

$usuario = $json['usuario'];
$pregunta = $json['pregunta'];
*/


$sql = "INSERT INTO `listaespera`.`peticiones` (`direccionIP`, `usuario`, `texto`, `abierta`, `fechaInicio`, `fechaFin`, `peticionescol`) VALUES ('', '".$usuario."', '".$pregunta."', '0', '".$date."', '', '');";

if ($conn->query ( $sql ) === TRUE) {
	echo "Insert realizado";
} else {
	echo "NO funciona";
}

?> 


