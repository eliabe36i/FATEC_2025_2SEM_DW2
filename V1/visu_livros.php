<?php
session_start();

$livros = file('livros.txt', FILE_IGNORE_NEW_LINES);

echo "<h1>Lista de Livros Cadastrados</h1>";

if (count($livros) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>ISBN</th>
            </tr>";

    foreach ($livros as $livro) {
        $dados = explode('|', $livro);
        echo "<tr>
                <td>{$dados[0]}</td>
                <td>{$dados[1]}</td>
                <td>{$dados[2]}</td>
                <td>{$dados[3]}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>Não há livros cadastrados.</p>";
}
?>
