<!DOCTYPE html>
<html>
<head>
    <title>Consultar Alunos</title>
    <link rel="stylesheet" type="text/css" href="consultar.css">
    
</head>
<body>
    <h1>Lista de Alunos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
        <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "escola";

    
        $conn = new mysqli($servername, $username, $password, $dbname);

      
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM alunos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["idade"] . "</td>";
                echo "<td>" . $row["curso"] . "</td>";
                echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a> | <a href='excluir.php?id=" . $row["id"] . "'>Excluir</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum aluno encontrado</td></tr>";
        }

        $conn->close();
        ?>
    </table>
    <a href="index.php">Voltar</a>
</body>
</html>
