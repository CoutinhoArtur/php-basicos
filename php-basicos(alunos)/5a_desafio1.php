<!DOCTYPE html>
<html>
<body>

    <!-- Formulário para entrada dos números -->
    <form action="" method="POST">
        <!-- Campo para o primeiro número -->
        <div>
            <label for="nasci">Nascimento:</label>
            <input type="number" id="nasci" name="nasci" required>
        </div>
        <br>

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <br>
        
        <!-- Botões do formulário -->
        <div>
            <!-- Botão para calcular (enviar o formulário) -->
            <button type="submit">Enviar</button><br><br>
            
    </form>


<?php
// Verifica se o formulário foi enviado
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $nasci = $_POST['nasci'];

    // Calculo

    $idade = date("Y") - $nasci;

    if ($idade >= 18) {
        echo"acesso permitido, $nome!"; 

        $arquivo = fopen('log_acessos.txt', "a");

            $linha = $nome . ';' . $nasci . "/n";

            fwrite($arquivo, $linha);

            fclose($arquivo);
    }

    else {
            echo"Acesso negado, $nome!";
    }

}
?>

</body>
</html>