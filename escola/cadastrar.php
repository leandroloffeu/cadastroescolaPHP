<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" type="text/css" href="cadastrar.css">
</head>
<body>
    <h1>Cadastrar Aluno</h1>
    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Idade: <input type="number" name="idade" required><br>
        Curso: <input type="text" name="curso" required><br>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>
