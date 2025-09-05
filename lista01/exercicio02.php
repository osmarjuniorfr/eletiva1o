<?php
     include("cabecalho.php");
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Lista 01 - Exercício 02</title>
</head>
<body>

    <main class="container">
        <h1>Subtração do segundo número menos o primeiro</h1>
        <form class="border p-4" method="post">
            <div class="row">
                <div class="col-md-2 mt-3">
                    <label for id="num1" class="form-label">Primeiro número:</label>
                    <input type="text" name="num1" id="num1" class="form-control"> 
                </div>

                <div class="col-md-2 mt-3">
                    <label for id="num2" class="form-label">Segundo número:</label>
                    <input type="text" name="num2" id="num2" class="form-control">
                </div>
            </div>

            <input type="submit" value="Subtrair" class="mt-3">
        </form>
    </main>

    <?php

    include("rodape.php");
    ?>