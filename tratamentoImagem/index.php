<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tratamentoImagem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM produto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {

    echo " <div class='card'>
  <img src='img/" . $row["id"] . ".jpg' class='card-img-top' alt='" . $row["id"] . "'>
  <div class='card-body'>
    <p class='card-text'>" . $row["descricao"] . "</p>
  </div>
</div>";

  }
} else {
  echo "0 results";
}
$conn->close();
?>





</main>
    
</body>
</html>