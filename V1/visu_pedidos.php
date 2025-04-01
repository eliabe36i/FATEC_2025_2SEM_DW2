<?php
session_start();

if ($_SESSION['usuario'] != 'biblio') {
    header('Location: dashboard.php');
    exit();
}


$pedidos = file('pedidos.txt', FILE_IGNORE_NEW_LINES);

echo "<h1>Lista de Pedidos</h1>";

if (count($pedidos) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>ISBN</th>
            </tr>";

    foreach ($pedidos as $pedido) {
        $dados = explode('|', $pedido);
        echo "<tr>
                <td>{$dados[0]}</td>
                <td>{$dados[1]}</td>
                <td>{$dados[2]}</td>
                <td>{$dados[3]}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>Não há pedidos cadastrados.</p>";
}
?>
