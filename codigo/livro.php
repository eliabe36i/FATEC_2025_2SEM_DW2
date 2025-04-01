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
        echo "Livro cadastrado com sucesso!";
    } else {
        echo "Todos os campos são obrigatórios!";
    }
}
?>

<form method="POST">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" required><br><br>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor" required><br><br>

    <label for="editora">Editora:</label>
    <input type="text" name="editora" id="editora" required><br><br>

    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" id="isbn" required><br><br>

    <button type="submit">Cadastrar Livro</button>
</form>
