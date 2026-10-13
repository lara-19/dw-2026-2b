<?php
$conexao = mysqli_connect('db', 'root', '123', 'banco_rede_social');

$sql = "SELECT * FROM usuarios WHERE id = 1";

$resultado = mysqli_query($conexao, $sql);

$usuario = mysqli_fetch_assoc($resultado);

echo $usuario["username"];
echo $usuario["nome"];
echo $usuario["email"];
?>