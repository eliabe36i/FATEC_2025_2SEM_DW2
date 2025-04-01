<?php
session_start();

if ($_SESSION['usuario'] != 'biblio') {
    header('Location: dashboard.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $isbn = $_POST['isbn'];

    if (!empty($titulo) && !empty($autor) && !empty($editora) && !empty($isbn)) {
        $livro = $titulo . '|' . $autor . '|' . $editora . '|' . $isbn . PHP_EOL;
        file_put_contents('livros.txt', $livro, FILE_APPEND);
        echo "<p style='color: green;'>Livro cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color: red;'>Todos os campos são obrigatórios!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Cadastrar Novo Livro</h2>
    <form method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" required><br>

        <label for="editora">Editora:</label>
        <input type="text" name="editora" id="editora" required><br>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn" required><br>

        <button type="submit">Cadastrar Livro</button>
    </form>
</div>

</body>
</html>
