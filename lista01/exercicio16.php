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

    <title>Lista 01 - Exercício 16</title>
</head>
<body>
    
    <main class="container">
        <h1>Desconto</h1>
        <form class="border p-4" method="post">
            <div class="row mt-3">
                <div class="col-md-3 mt-3">
                    <label for id="valor" class="form-label">valor:</label>
                    <input type="number" name="valor" id="valor" class="form-control" step="0.01">
                </div>
                <div class="col-md-3 mt-3">
                    <label for id="por" class="form-label">porcentagem de desconto:</label>
                    <input type="number" name="por" id="por" class="form-control">
                </div>
            </div>

            <input type="submit" value="Calcular Desconto" class="mt-3">
        </form>
    </main>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $valor = $_POST["valor"];
    $por = $_POST["por"];
    
    $valor_float = floatval($valor);

    $desc = $valor * ($por / 100);
    $fin = $valor - $desc;

    echo "<h2>O valor com desconto é: $fin</h2>";
    }
include("rodape.php");
?>