<?php
$conexao = mysqli_connect('db', 'root', '123', 'banco_rede_social');

$sql = "SELECT * FROM usuario WHERE idusuario = 1";

$resultado = mysqli_query($conexao, $sql);

$usuario = mysqli_fetch_assoc($resultado);

echo $usuario["username"];
echo $usuario["nome"];
echo $usuario["email"];

$sql = "SELECT * FROM postagem WHERE idusuario = 1";
$resultado = mysqli_query($conexao, $sql);

echo "<h2>Postagens do usuário</h2>";

while ($postagem = mysqli_fetch_assoc($resultado)) {
    echo $postagem["texto"];
    echo "<br>";
}

?>