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

    <title>Lista 01 - Exercício 06</title>
</head>
<body>
    
    <main class="container">
        <h1>Conversão de temperatura 1</h1>
        <form class="border p-4" method="post">
            <div class="row mt-3">
                <div class="col-md-2 mt-3">
                    <label for id="celsius" class="form-label">Temperatura em Celsius:</label>
                    <input type="number" name="celsius" id="celsius" class="form-control">
                </div>
            </div>

            <input type="submit" value="Calcular Fahrenheit" class="mt-3">
        </form>
    </main>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $celsius = $_POST["celsius"];
    

    $fah = ($celsius * 1.8) + 32;

    echo "<h2>A temperatura convertida em Farhrenheit é $fah</h2>";
    }
include("rodape.php");
?>