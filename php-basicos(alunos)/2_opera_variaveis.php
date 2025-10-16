<?php

// Montagem da url

// http://localhost/php-basicos/php-basicos(alunos)
// 2_opera_variaveis.php.?numero1=10&numero2=5

// Variaveis que recebem valores pela URl (Método GET)
$numero1 = $_GET['numero1'];
$numero1 = $_GET['numero2'];

// Verifica se os valores foram passados
// E converte para números inteiros
if (isset($numero1) && ($numero2)) {
    $numero1 = (int)$numero1;
    $numero1 = (int)$numero2;
}

// Cálculos
$soma = $numero1 + $numero2;

// Exibe
echo "Soma: $soma <br>";

?>