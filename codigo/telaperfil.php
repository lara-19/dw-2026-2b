<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Perfil</title>
     
    <link rel="stylesheet" href="perfil.css">
    
</head>
<body>
    <?php

$conexao = mysqli_connect('db', 'root', '123', 'banco_rede_social');

$sql = "SELECT * FROM usuario WHERE idusuario = 1";

$resultado = mysqli_query($conexao, $sql);


$usuario = mysqli_fetch_array($resultado);

echo "<h2>Nome De Usuario</h2>";
echo "<p class=''>" . $usuario["username"] . "</p>";

echo "<h2>Nome:</h2>";
echo "<p id='' class=''>" . $usuario["nome"] . "</p>";

echo "<h2>Email:</h2>";
echo "<div>" . $usuario["email"] . "</div>";



// Contar seguidores
$sql = "SELECT COUNT(*) AS total FROM seguir WHERE idseguindo = 1";
$resultado = mysqli_query($conexao, $sql);
$seguidores = mysqli_fetch_array($resultado);

echo "<h2>Seguidores</h2>";
echo "<p>" . $seguidores['total'] . "</p>";

// Contar pessoas seguindo
$sql = "SELECT COUNT(*) AS total FROM seguir WHERE idseguidor = 1";
$resultado = mysqli_query($conexao, $sql);
$seguindo = mysqli_fetch_array($resultado);

echo "<h2>Seguindo</h2>";
echo "<p>" . $seguindo['total'] . "</p>";



$sql = "SELECT * FROM postagem WHERE idusuario = 1";
$resultado = mysqli_query($conexao, $sql);

echo "<h2>Postagens do usuário</h2>";

while ($postagem = mysqli_fetch_array($resultado)) {
    echo  "<div id='postagem'>";
    echo $postagem["texto"];
    echo "<br>";
    echo "</div>";
}
 ?>

</body>
</html>