<!DOCTYPE html>
<html>
<body>

    <!-- entrada (POST-servidor "offline") -->
    <form action="" method="POST">
        <!-- Campo para Nascimento -->
        <div>
            <label for="nasci">Nascimento:</label>
            <input type="number" id="nasci" name="nasci" required>
        </div>
        <br>

            <!-- Campos para nome -->
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <br>
        
        <!-- Botão -->
        <div>
            <button type="submit">Enviar</button><br><br>
            
              <!-- Botão para limpar resultados (recarrega a página sem parâmetros) -->
            <button type="button" onclick="window.location.href=window.location.pathname">
                Limpar Resultados
            </button>      
        </div>
    </form>


<?php
// Verifica se foi enviado
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores enviados
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