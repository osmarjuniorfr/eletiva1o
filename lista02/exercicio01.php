<?php
include("cabecalho.php");

?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista 02 - Exercício 01</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="valor1" class="form-label">Informe o valor 1</label>
              <input type="text" id="valor1" name="valor1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor2" class="form-label">Informe o valor 2</label>
              <input type="text" id="valor2" name="valor2" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor3" class="form-label">Informe o valor 3</label>
              <input type="text" id="valor3" name="valor3" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor4" class="form-label">Informe o valor 4</label>
              <input type="text" id="valor4" name="valor4" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor5" class="form-label">Informe o valor 5</label>
              <input type="text" id="valor5" name="valor5" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor6" class="form-label">Informe o valor 6</label>
              <input type="text" id="valor6" name="valor6" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor7" class="form-label">Informe o valor 7</label>
              <input type="text" id="valor7" name="valor7" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

   <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coloca todos os valores em um array
    $valores = [
        $_POST['valor1'],
        $_POST['valor2'],
        $_POST['valor3'],
        $_POST['valor4'],
        $_POST['valor5'],
        $_POST['valor6'],
        $_POST['valor7']
    ];

    // Inicializa com o primeiro valor
    $menor = $valores[0];
    $posicao = 1;

    // Percorre o array
    for ($i = 1; $i < count($valores); $i++) {
        if ($valores[$i] < $menor) {
            $menor = $valores[$i];
            $posicao = $i + 1; // +1 porque array começa em 0
        }
    }

    echo "O menor valor é $menor e está na posição $posicao.";
}

include("rodape.php");
?>


