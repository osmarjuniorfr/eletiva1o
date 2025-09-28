<?php
include("cabecalho.php");

echo "<h1>Exercício 6</h1>";
?>
<form method="post">

<div class="mb-3">
              <label for="flu" class="form-label">Digite um float: </label>
              <input type="number" step="0.01" id="flu" name="flu" class="form-control">
            </div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $f = (float) $_POST['flu'];

    function arredondar($number){
        $arredondado = round($number);
        echo "<p>O número $number arredondado fica $arredondado</p>";
    }
    arredondar($f);
}
include("rodape.php");
?>