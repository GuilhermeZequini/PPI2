<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Tipo Usuário</title>
</head>

<body>
    <h1>Gerenciar Tipo Usuário</h1>

    <form action="CadastrarTipoUsuario.php" method="post">
        <h2>Cadastrar tipo Usuário</h2>
        <p>
            <input type="text" name="descricao" placeholder="Descrição tipo Cadastrar">
        </p>
        <p>
            <input type="submit" VALUE="cadastrar">
        </p>

    </form>


    <h2>Tipos de usuário cadastrados</h2>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "loja";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tipo_usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo " <table>
            <tr>
                <th>Código</th>
                <th>Descriçãp</th>
            </tr>";

        while ($row = $result->fetch_assoc()) {  //o comando fetch_assoc é quivalente ao foreach
            echo " <tr>
            <td> ". $row["idtipo_usuario"] ." </td>
            
            <td> ". $row["descricao"] ." </td>
        </tr>";

        }
        echo "</table>";
    } else {
        echo "Não há registros de tipo usuário";
    }
    $conn->close();
    ?>


   
       
   



</body>

</html>