 
<?php
	// Conecto con la BBDD
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "listaespera";
$conn = new mysqli ( $servername, $user, $password, $dbname );

if ($conn->connect_error) {
	die ( "Error: " . $conn->connect_error );
} 
		// echo "Conexión con BBDD correcta";

$sql = "SELECT * FROM listaespera.peticiones where abierta = 0;";

// abierta = 0 son las preguntas sin responder


$result = $conn->query ( $sql );
if ($result->num_rows > 0) {
	echo "<table border='solid' style='width:20%; border-color: white;border-radius: 20px '>";
	echo "<th>Id peticion</th><th>Usuario</th><th>Duda</th><th>abierta</th>";
	while ( $row = $result->fetch_assoc () ) {
		$arr = array (	
			'idPeticion' => $row ['idPeticion'],
			'usuario' => $row ['usuario'],
			'texto' => $row ['texto'],
			'abierta' => $row ['abierta']
			);  

		echo "	<tr onclick='mostrar(this)'>";
		echo " <td> " . json_encode ( $arr ['idPeticion'] ) . "</td>";
		echo " <td> " . json_encode ( $arr ['usuario'] ) . "</td>";
		echo " <td> " . json_encode ( $arr ['texto'] ) . "</td>";
		echo " <td> " . json_encode ( $arr ['abierta'] ) . "</td>";

		echo "</tr>";


		
}
		echo " </table>";
	}
		// echo json_encode ($ar);

	
	?>