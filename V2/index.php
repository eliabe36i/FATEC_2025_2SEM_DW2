<?php
session_start();
if (isset($_SESSION['usuario'])) {
   // header("Location: dashboard.php"); 
    //exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Login</title>
</head>
<body >
<div class="login-container">
  <h2>Área de Login</h2>
    
    <form action="login.php" method="post">
    
   
        <label for="usuario">Usuário:</label> 
        <input type="text" name="usuario" required><br><br>
  
   
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
    
        <button type="submit">Entrar</button>
</div>
    </form>

    <?php
    if (isset($_GET['erro'])) {
        echo "<p style='color: red;'>Login ou senha incorretos!</p>";
    }
    ?>
</body>
</html>
