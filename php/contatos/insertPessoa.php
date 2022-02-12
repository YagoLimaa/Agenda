<header>
    <h3>Adicionar Contato</h3>
</header>

<?php
    $nome = mysqli_real_escape_string ($conexao, $_POST ["Nome"]);
    $telefone = mysqli_real_escape_string($conexao, $_POST["Telefone"]);
    $consultasql = "INSERT INTO tbcontatos (Nome, Telefone) VALUES  ('{$nome}', '{$telefone}')";

    mysqli_query($conexao, $consultasql) or die("Erro ao inserir". mysqli_error($conexao));
    echo "O contato foi inserido na tabela com sucesso";
?>