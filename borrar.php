
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
echo "Conexión con BBDD correcta";


$idpeticion = $_POST['idpeticion'];
$date = date( 'Y-m-d H:i:s'); 

$sql = "UPDATE `listaespera`.`peticiones` SET `abierta`='1', `fechaFin`='" .$date . "' WHERE `idPeticion`='".$idpeticion."';";



if ($conn->query ( $sql ) === TRUE) {
	echo "Insert realizado";
} else {
	echo "NO funciona";
}

?> 