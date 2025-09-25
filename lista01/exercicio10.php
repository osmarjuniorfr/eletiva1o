<?php
 include("cabecalho.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Lista 01 - Exercício 10</title>
</head>
<body>
    
    <main class="container">
        <h1>Perímetro de um retangulo</h1>
        <form class="border p-4" method="post">
            <div class="row mt-3">
                <div class="col-md-3 mt-3">
                    <label for id="lar" class="form-label">Largura do retângulo:</label>
                    <input type="number" name="lar" id="lar" class="form-control">
                </div>
                <div class="col-md-3 mt-3">
                    <label for id="alt" class="form-label">Altura do retângulo:</label>
                    <input type="number" name="alt" id="alt" class="form-control">
                </div>
            </div>

            <input type="submit" value="Calcular perímetro" class="mt-3">
        </form>
    </main>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $lar = $_POST["lar"];
    $alt = $_POST["alt"];
    

    $per = 2 * ($lar + $alt);

    echo "<h2>O perímetro do retângulo é: $per</h2>";
    }
include("rodape.php");
?>