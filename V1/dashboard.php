<?php


session_start();


if ($_SESSION['usuario'] == 'biblio') {
    echo "<a href='livro.php'>Cadastrar Livro</a><br>";
    echo "<a href='visu_pedidos.php'>Visualizar Pedidos</a><br>";
} else {
    echo "<a href='pedido.php'>Cadastrar Pedido</a><br>";
}

echo "<a href='visu_livros.php'>Visualizar Livros</a><br>";
echo "<a href='logout.php'>Logout</a>";
?>
