<?php
$conexao = mysqli_connect("localhost", "root", "", "meu_banco");

$sql = "SELECT * FROM usuarios WHERE id = 1";

$resultado = mysqli_query($conexao, $sql);

$usuario = mysqli_fetch_assoc($resultado);

echo $usuario["nome"];
echo "<br>";
echo $usuario["email"];
?>