<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: principal.php");
    exit();
}
?>
