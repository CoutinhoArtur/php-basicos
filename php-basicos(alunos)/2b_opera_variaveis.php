<!DOCTYPE html>
<html>
<body>

    <!-- Formulário para entrada dos números -->
    <form action="" method="GET">
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
            <button type="submit">Enviar</button>
            
            <!-- Botão para limpar resultados (recarrega a página sem parâmetros) -->
            <button type="button" onclick="window.location.href=window.location.pathname">
                Limpar Resultados
            </button>
        </div>
    </form>
</body>
</html>


<?php
    // Verifica se foram enviados os dois números via GET
    if (isset($_POST['nome']) && isset($_POST['numero2'])) {
        // Converte os valores recebidos para inteiros
        $numero1 = (int)$_GET['numero1'];
        $numero2 = (int)$_GET['numero2'];
        
        // Realiza as operações matemáticas básicas
        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;
        
        // Exibe o título dos resultados
        echo "<h3>Resultados:</h3>";
        
        // Mostra os resultados das operações

        echo "Subtração: $subtracao <br>";
   
    }
    ?>