<?php
session_start();

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $cor = $_POST["cor"];

    if (!empty($nome)) {
        // Armazena os dados na sessão
        $_SESSION["nome"] = $nome;
        $_SESSION["cor"] = $cor;

        // Redireciona para o perfil
        header("Location: 15d_perfil.php");
        exit;
    } else {
        $erro = "Por favor, informe seu nome.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
</head>
<body>
    <h2>Crie seu perfil temporário</h2>

    <?php if (!empty($erro)) echo "<p style='color:red;'>$erro</p>"; ?>

    <form method="post" action="">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Cor favorita:</label><br>
        <select name="cor">
            <option value="lightblue">Azul Claro</option>
            <option value="lightgreen">Verde Claro</option>
            <option value="lightyellow">Amarelo Claro</option>
            <option value="lightpink">Rosa Claro</option>
            <option value="lightgray">Cinza Claro</option>
        </select><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
