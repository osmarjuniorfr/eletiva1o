<?php
    #verifica se foi usado o método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        #coleta os dados do formulário como string
        $num1_string = $_POST['num1'];
        $num2_string = $_POST['num2'];

        #converte de string para int
        $num1 = intval($num1_string);
        $num2 = intval($num2_string);

        #faz a subtracao
        $subtracao = $num2 - $num1;

        #apresenta
        echo "<h3>A subtração de " . $num2 . " - " . $num1 . " é: " . $subtracao . "</h3>";


    } else {
    // Se a página for acessada diretamente sem o formulário, exibe uma mensagem
    echo "Por favor, preencha o formulário para somar os números.";
}




?>
