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

    <title>Lista 01 - Exercício 13</title>
</head>
<body>
    
    <main class="container">
        <h1>Conversão metros em cm</h1>
        <form class="border p-4" method="post">
            <div class="row mt-3">
                <div class="col-md-3 mt-3">
                    <label for id="metro" class="form-label">Quantidade em metros:</label>
                    <input type="number" name="metro" id="metro" class="form-control">
                </div>
            </div>

            <input type="submit" value="Converter" class="mt-3">
        </form>
    </main>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $metro = $_POST["metro"];
    

    $cm = $metro * 100;

    echo "<h2>A quantidade convertida é de $cm centímetros.</h2>";
    }
include("rodape.php");
?>