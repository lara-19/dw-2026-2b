<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Perfil</title>
     
    <link rel="stylesheet"
    href="perfil.css">
    
</head>
<body>
    <?php

$conexao = mysqli_connect('db', 'root', '123', 'banco_rede_social');

$sql = "SELECT * FROM usuario WHERE idusuario = 1";

$resultado = mysqli_query($conexao, $sql);

$usuario = mysqli_fetch_assoc($resultado);

echo $usuario["username"];
echo $usuario["nome"];
echo $usuario["email"];



// Contar seguidores
$sql = "SELECT COUNT(*) AS total FROM seguir WHERE idseguindo = 1";
$resultado = mysqli_query($conexao, $sql);
$seguidores = mysqli_fetch_assoc($resultado);

echo "<p>Seguidores: {$seguidores['total']}</p>";

// Contar pessoas seguindo
$sql = "SELECT COUNT(*) AS total FROM seguir WHERE idseguidor = 1";
$resultado = mysqli_query($conexao, $sql);
$seguindo = mysqli_fetch_assoc($resultado);

echo "<p>Seguindo: {$seguindo['total']}</p>";



$sql = "SELECT * FROM postagem WHERE idusuario = 1";
$resultado = mysqli_query($conexao, $sql);

echo "<h2>Postagens do usuário</h2>";

while ($postagem = mysqli_fetch_assoc($resultado)) {
    echo $postagem["texto"];
    echo "<br>";
}
 ?>

</body>
</html>