<!DOCTYPE html>
<html>
<head>
    <title>Editar Aluno</title>
    <link rel="stylesheet" type="text/css" href="editar.css">
</head>
<body>
    <h1>Editar Aluno</h1>
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "escola";

  
    $conn = new mysqli($servername, $username, $password, $dbname);

  
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM alunos WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
            Idade: <input type="number" name="idade" value="<?php echo $row['idade']; ?>" required><br>
            Curso: <input type="text" name="curso" value="<?php echo $row['curso']; ?>" required><br>
            <input type="submit" value="Atualizar">
        </form>
        <?php
    } else {
        echo "Aluno não encontrado!";
    }

    $conn->close();
    ?>
    <a href="consultar.php">Voltar</a>
</body>
</html>
