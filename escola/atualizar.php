<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "escola";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];

$sql = "UPDATE alunos SET nome='$nome', idade=$idade, curso='$curso' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Aluno atualizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="consultar.php">Voltar</a>