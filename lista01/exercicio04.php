<?php
    include("cabecalho.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $num1_string = $_POST["num1"];
    $num2_string = $_POST["num2"];

    $num1 = intval($num1_string);
    $num2 = intval($num2_string);
    

    $div = $num1 / $num2;


    




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Lista 01 - Exercício 04</title>
</head>
<body>
    
    <main class="container">
        <h1>Divisão de dois valores</h1>
        <form class="border p-4" method="post">
            <div class="row mt-3">
                <div class="col-md-2 mt-3">
                    <label for id="num1" class="form-label">Primeiro Número:</label>
                    <input type="text" name="num1" id="num1" class="form-control">
                </div>

                <div class="col-md-2 mt-3">
                    <label for id="num2" class="form-label">Segundo Número:</label>
                    <input type="text" name="num2" id="num2" class="form-control">
                </div>
            </div>

            <input type="submit" value="Dividir" class="mt-3">
        </form>
    </main>

<?php

if ($div != 0){
        echo "<h3> A divisão dos números " . $num1 . " e " . $num2 . " resulta em: " . $div . "</h3>";
    } else{
        echo "<p> A divisão resulta em 0</p>";
    }
   }
include("rodape.php");
?>