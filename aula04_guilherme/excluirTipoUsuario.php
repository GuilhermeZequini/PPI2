<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loja";

$id = $_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM tipo_usuario WHERE idtipo_usuario=" . $id;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

header("location:gerenciarTipoUsuario.php");
?>