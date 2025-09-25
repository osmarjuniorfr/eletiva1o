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

    <title>Lista 01 - Exercício 17</title>
</head>
<body>
    
    <main class="container">
        <h1>Juros simples</h1>
        <form class="border p-4" method="post">
            <div class="row mt-3">
                <div class="col-md-3 mt-3">
                    <label for id="capital" class="form-label">capital inicial:</label>
                    <input type="number" name="capital" id="capital" class="form-control" step="0.01">
                </div>
                <div class="col-md-3 mt-3">
                    <label for id="juros" class="form-label">taxa de juros:</label>
                    <input type="number" name="juros" id="juros" class="form-control">
                </div>
                <div class="col-md-3 mt-3">
                    <label for id="periodo" class="form-label">periodo em dias:</label>
                    <input type="number" name="periodo" id="periodo" class="form-control">
                </div>
            </div>

            <input type="submit" value="Calcular rendimento" class="mt-3">
        </form>
    </main>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $capital = $_POST["capital"];
    $juros = $_POST["juros"];
    $periodo = $_POST["periodo"];
    
    $capital_float = floatval($capital);

    $rend = $capital * ($juros / 100) * $periodo;
    

    echo "<h2> O rendimento nesse período é de $rend </h2>";
    }
include("rodape.php");
?>