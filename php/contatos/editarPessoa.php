<?php
    $IdContato = $_GET["IdContato"];

    $saveSQL = "SELECT * FROM tbcontatos WHERE IdContato = {$IdContato}";

    $rs = mysqli_query($conexao, $saveSQL) or die("Não foi possivel fazer a consulta" . mysqli_error($conexao));

    $data = mysqli_fetch_assoc($rs);

?>


<h2>Editar Pessoa</h2>
<div>
    <form action="./index.php?menuop=atualizarPessoa" method="post">
    <div>
        <label for="IdContato">Identificação</label>
        <input type="text" name="Nome" value=" <?= $data["IdContato"] ?> "disabled>
    </div>
    <div>
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" value=" <?= $data["Nome"] ?>">
    </div>
    <div>
        <label for="Telefone">Telefone</label>
        <input type="text" name="Telefone" value=" <?= $data["Telefone"] ?>">
    </div>
    <div>
        <input type="submit" value="Atualizar" nome="Atualizar">
    </div>
    </form>
</div>