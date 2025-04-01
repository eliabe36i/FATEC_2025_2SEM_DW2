<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navegação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        nav {
            margin-top: 20px;
        }

        nav a {
            display: block;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 16px;
        }

        nav a:hover {
            background-color: #0056b3;
        }

        nav a.logout {
            background-color: #dc3545;
        }

        nav a.logout:hover {
            background-color: #c82333;
        }

        nav a:active {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Bem-vindo ao Sistema</h2>

    <?php
    session_start();

    
    if (!isset($_SESSION['usuario'])) {
        echo "Você não está logado.";
        exit();
    }

   
    if ($_SESSION['usuario'] == 'biblio') {
        echo "<nav>";
        echo "<a href='livro.php'>Cadastrar Livro</a>";
        echo "<a href='visu_pedidos.php'>Visualizar Pedidos</a>";
        echo "</nav>";
    } else {
        echo "<nav>";
        echo "<a href='pedido.php'>Cadastrar Pedido</a>";
        echo "</nav>";
    }

    
    echo "<nav>";
    echo "<a href='visu_livros.php'>Visualizar Livros</a>";
    echo "<a href='logout.php' class='logout'>Logout</a>";
    echo "</nav>";
    ?>
</div>

</body>
</html>
