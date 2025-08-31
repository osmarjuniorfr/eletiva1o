<?php
// Verifica se os dados foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Pega os valores do formulário. Eles vêm como strings.
    $numero1_string = $_POST['numero1'];
    $numero2_string = $_POST['numero2'];
    
    // Converte as strings para inteiros para garantir a soma correta
    $numero1 = intval($numero1_string);
    $numero2 = intval($numero2_string);
    
    // Realiza a soma
    $soma = $numero1 + $numero2;
    
    // Exibe o resultado para o usuário
    echo "<h1>Resultado da Soma</h1>";
    echo "<p>O primeiro número inserido foi: " . $numero1_string . "</p>";
    echo "<p>O segundo número inserido foi: " . $numero2_string . "</p>";
    echo "<h3>A soma de " . $numero1 . " + " . $numero2 . " é: " . $soma . "</h3>";

} else {
    // Se a página for acessada diretamente sem o formulário, exibe uma mensagem
    echo "Por favor, preencha o formulário para somar os números.";
}

?>