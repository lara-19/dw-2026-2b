<?php
session_start();
require_once "conexao.php";

$sql = "SELECT postagem.texto,usuario.nome,usuario.username
    FROM postagem
    INNER JOIN usuario ON
postagem.idusuario = usuario.idusuario";

$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
    <a href="form_postagem.php">Fazer nova postagem</a>
    <br>
    <a href="telaperfil.php">Acessar meu perfil</a>

    <h2>Postagens</h2>

    <?php
    while ($linha =
mysqli_fetch_array($resultado)){
    echo "div class='postagens'>";
    echo "<strong>" . 
htmlspecialchars($linha['nome']) . "</strong>";
    echo "<p>" . 
htmlspecialchars($linha['texto']) . "</p>";
    echo "</div";
}
?>
</body>
</html>