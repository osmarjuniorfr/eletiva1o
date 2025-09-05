<?php
    $nome = "Osmar";
    echo "<p>variavel maiuscula:".strtoupper($nome)."</p>";
    echo "<p>variavel minuscula:".strtolower($nome)."</p>";
    echo "<p>qtd de caracteres:".strlen($nome)."</p>";
    $posicao = strpos($nome, "r");
    echo "<p>caractere O na posição $posicao</p>";
    date_default_timezone_set('America/Sao_Paulo');
    $data1 = date("d/m/Y");
    $hora = date("H:i:s");
    echo "<p>data $data1, $hora</p>";
    if(checkdate(2, 30, 2025)){
        echo "<p> A data informada existe (30/02/2025)</p>";
    }   else {
        echo "<p> A tada informada não existe (30/02/2025)</p>";
    }

    $valor = -10;
    echo "<p> Valor absoluto:".abs($valor)."</p>";
    $valor = 5.9;
    echo "<p> Valor arredondado:".round($valor)."</p>";
    $valor = rand(1,100);
    echo "<p>Valor aleatório: $valor</p>";
    echo "<p>Raiz quadrada de 16: ".sqrt(16)."</p>";
    $valor = 13.5;
    echo "<p>Valor formatado: R$".number_format($valor, 2, ",", ".")."</p>";

    function exibirSaudacao(){
        echo "<p>Hello world!</p>";
    }

    exibirSaudacao();

    function exibirSaudacaoComNome($nome){
        echo "<p> Seja bem vindo $nome </p>";
    }

    exibirSaudacaoComNome("Osmar");

    function menorValor($valor1, $valor2){
        return min($valor1, $valor2);
    }

    echo "<p> O menor valor entre 2 e 5 é: ".menorValor(5,2);

    function somarValores(...$numeros){
        return array_sum($numeros);
    }

    $soma = somarValores(1,2,3,4,5,6);
    echo "<p> A soma dos valores é: $soma </p>";
?>