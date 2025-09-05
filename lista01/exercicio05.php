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

    <title>Lista 01 - Exercício 05</title>
</head>
<body>
    
    <main class="container">
        <h1>Média aritmética de três notas</h1>
        <form class="border p-4" method="post">
            <div class="row mt-3">
                <div class="col-md-2 mt-3">
                    <label for id="num1" class="form-label">Primeira nota:</label>
                    <input type="number" name="num1" id="num1" class="form-control">
                </div>

                <div class="col-md-2 mt-3">
                    <label for id="num2" class="form-label">Segunda nota:</label>
                    <input type="number" name="num2" id="num2" class="form-control">
                </div>

                <div class="col-md-2 mt-3">
                    <label for id="num3" class="form-label">Terceira nota:</label>
                    <input type="number" name="num3" id="num3" class="form-control">
                </div>
            </div>

            <input type="submit" value="Média Aritmética" class="mt-3">
        </form>
    </main>

<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    

    $media = ($num1 + $num2 + $num3)/3;

    echo "<h2>A média das notas é: $media</h2>";
    }
include("rodape.php");
?>