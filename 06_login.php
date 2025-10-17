<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuário</title>
</head>
<body>
    <form action="" method="POST"> 
        <label for="nome">Nome:</label>  
        <input type="text" name="nome" required><br><br>

        <label for="senha">Senha:</label>  
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form> 


    <?php
        // Verifica se o formulário foi enviado 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os valores enviados
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            // essas informações vem do "name", feito no html

            // Abrir o arquivo usuarios.txt para leitura
            $arquivo = fopen('usuarios.txt', 'r');
            $login_sucesso = false;

            // ler cada linha do arquivo
            // loop lendo as inform~ções pra encontrar o usuario desejado
            // while - loop
            while (($linha = fgets($arquivo)) !== false) {
                // trim - retirar espaçõs em branco
                // explode - separar string pelo delimitador
                // list - atribuição multipla
                list($usuario_arquivo, $senha_arquivo) = explode(';', trim ($linha));

                // Verifica se o nome e senha correspondem aos valores no arquivo 
                if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
                    $login_sucesso = true;
                    // INterromper o laço. Usuario localizado no arquivo.
                    break; 
                }
            }

            // Fecha o arquivo
            fclose($arquivo);

            // Exibe a mensagem (feedback) de sucesso OU erro
            if ($login_sucesso) {
             echo "<p style='color: darkgreen;'>Login realizado com sucesso, <br> Bem vindo(a) $nome!</p>";
            } else{
                echo "<p style='color: red;'>Usuário ou senha incorretos.</p>";
            }

        }
        
    ?>

</body>
</html>