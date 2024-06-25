<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "escola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];

$sql = "INSERT INTO alunos (nome, idade, curso) VALUES ('$nome', $idade, '$curso')";

if ($conn->query($sql) === TRUE) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="index.php">Voltar</a>
