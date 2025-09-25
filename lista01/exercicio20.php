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

    <title>Lista 01 - Exercício 20</title>
</head>
<body>
    
    <main class="container">
        <h1>Velocidade média</h1>
        <form class="border p-4" method="post">
            <div class="row mt-3">
                <div class="col-md-3 mt-3">
                    <label for id="distancia" class="form-label">Distância:</label>
                    <input type="number" name="distancia" id="distancia" class="form-control">
                </div>
                <div class="col-md-3 mt-3">
                    <label for id="tempo" class="form-label">Tempo:</label>
                    <input type="number" name="tempo" id="tempo" class="form-control">
                </div>
            </div>

            <input type="submit" value="Calcular velocidade media" class="mt-3">
        </form>
    </main>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $distancia = $_POST["distancia"];
    $tempo = $_POST["tempo"];
    

    $vm = ($distancia / $tempo);

    echo "<h2> A velocidade média é de $vm </h2>";
    }
include("rodape.php");
?>