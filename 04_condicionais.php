<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Recebe a senha
        $senha = $_POST['senha'];

        // Verifica se a senha é: 123
        if ($senha == '123') {
            // Se usuário digitar a senha correta (123)
            // ele será desviado para página 4b_bem_vindo.php
            header("Location: 4b_bem_vindo.php");
            exit();
        } 
        else {
            // Exibe mensagem de erro
            $erro = "Senha incorreta. Tente novamente.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
</head>
<body>
    <h2>Digite a senha para continuar:</h2>
    <form method="post" action="">
        <!-- Campo da senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <!-- Botão -->
        <button type="submit">Entrar</button>   
    </form>


<?php
    // Exibe a mensagem de erro, se existir
    if (isset($erro)) {
    echo "<p style='color: red;'>$erro</p>";
    }
?>

