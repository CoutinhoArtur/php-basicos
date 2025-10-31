<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome']) || !isset($_SESSION['cor'])) {
    header("Location: 15d_desafio_login.php");
    exit();
}

// Pega os dados
$nome = $_SESSION['nome'];
$cor = $_SESSION['cor'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Perfil</title>
</head>
<body style="background-color: <?php echo $_SESSION['cor']; ?>;">
    <p>Esta é sua página.</p>

    <h2>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h2>

    <a href="15d_desafio_logout.php">Sair</a>
  
</body>
</html>

