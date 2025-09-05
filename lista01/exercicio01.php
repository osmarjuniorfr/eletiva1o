<?php
    include("cabecalho.php");
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Lista 01 - Exercício 01</title>
</head>
<body>

    <main class="container">
        <h1>Soma de dois números</h1>
        <form class="border p-4" method="post">
            <div class="row">
                <div class="col-md-2 mt-3">
                    <label for id="numero1" class="form-label">Primeiro número:</label>
                    <input type="text" name="numero1" id="numero1" placeholder="1°" class="form-control"> 
                </div>

                <div class="col-md-2 mt-3">
                    <label for id="numero2" class="form-label">Segundo número:</label>
                    <input type="text" name="numero2" id="numero2" placeholder="2°" class="form-control">
                </div>
            </div>

            <input type="submit" value="Somar" class="mt-3">
        </form>
    </main>
<?php

  include("rodape.php")

  ?>