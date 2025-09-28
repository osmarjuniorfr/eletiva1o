<?php
include("cabecalho.php");
?>

<form method="post">
<div class="mb-3">
              <label for="number" class="form-label">Digite um número: </label>
              <input type="number" id="number" name="number" class="form-control">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];

    function acharRaiz($number){
        $raiz = sqrt($number);
        echo "<p>A raíz quadrada de $number é $raiz</p>";
    }
    acharRaiz($number);
}

include("rodape.php");
?>