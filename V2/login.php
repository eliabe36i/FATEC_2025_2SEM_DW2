<?php
session_start();


$usuarios_permitidos = [
    "professor" => "professor",
    "biblio" => "biblio"
];



$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';


if ($usuarios_permitidos) {
    $_SESSION['usuario'] = $usuario; 
    if ($usuario == "professor") {
        header("Location: dashboard.php");
    } else {
        header("Location: dashboard.php");
    }
    exit();
} else {
    header("Location: index.php?erro=1"); 
    exit();
}
?>
