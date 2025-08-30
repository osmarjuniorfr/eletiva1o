<?php
    // Checa se a "caixa" 'nome' existe no array $_POST
    if (isset($_POST['nome'])) {
        // Se existir, a gente pega o valor
        $nome = $_POST['nome'];
        echo "Seja bem vindo(a) $nome";
    } else {
        // Se não existir, a gente mostra uma mensagem de aviso ou um formulário
        echo "Nenhum nome foi enviado.";
    }
?>