<?php
session_start();

if ($_SESSION['usuario'] != 'biblio') {
    header('Location: dashboard.php');
    exit();
}

$pedidos = file('pedidos.txt', FILE_IGNORE_NEW_LINES);

echo "<h1 >Lista de Pedidos</h1>";

if (count($pedidos) > 0) {
    echo "<table class='pedido-table'>
   
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
    echo "<p class='no-pedidos'>Não há pedidos cadastrados.</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 30px;
        }

        .pedido-table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pedido-table th, .pedido-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .pedido-table th {
            background-color: #007bff;
            color: white;
        }

        .pedido-table tr:hover {
            background-color: #f1f1f1;
        }

        .pedido-table td {
            font-size: 14px;
            color: #495057;
        }

        .no-pedidos {
            text-align: center;
            font-size: 18px;
            color: #dc3545;
        }
    </style>
</head>
<body>

</body>
</html>
