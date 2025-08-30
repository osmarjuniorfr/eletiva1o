<?php 

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese'); 
    $dia = date('d');
    $mes = strftime('%B');
    $ano = date('Y');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exemplo</title>
</head>
<body>
    <h1> Hoje é dia <?= $dia ?> de <?= $mes?> de <?= $ano?></h1>
        <form method="post" action="respostaexemplo.php">
            <div class="mb-3">
              <label for="nome" class="form-label">Informe o seu nome:</label>
              <input type="text" id="nome" name="nome" class="form-control">
            </div>

     <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    
</body>
</html>