<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste_BD";

$descricao = $_POST["descricao"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO teste (descricao) VALUES ('" . $descricao . "');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location:teste_bd.php");

$conn->close();
?>