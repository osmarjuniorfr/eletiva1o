<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Lista 01 - Exercício 03</title>
</head>
<body>
    
    <main class="container">
        <h1>Multiplicação de dois valores</h1>
        <form class="border p-4" method="post" action="respostaexercicio03.php">
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

            <input type="submit" value="Multiplicar" class="mt-3">
        </form>
    </main>

</body>
</html>