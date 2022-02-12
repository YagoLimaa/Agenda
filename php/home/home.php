<header>
    <h3>Lista de contatos cadastrados</h3>
</header>
<section>
    <div class="container">
        <div>
            <a href="./index.php?menuop=contatoCreate">Adicione Novo contato</a>
        </div>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Editar Contatos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $contatosdb = "SELECT * FROM tbcontatos";
            $rs = mysqli_query($conexao, $contatosdb) or die("Não foi possivel consultar" . mysqli_error($conexao));
            while ($data = mysqli_fetch_assoc($rs) ) {

            ?>
                <tr>
                    <td><?= $data["IdContato"] ?> </td>
                    <td><?= $data["Nome"] ?> </td>
                    <td><?= $data["Telefone"] ?> </td>
                    <td><a href="./index.php?menuop=editarPessoa&IdContato=<?= $data["IdContato"] ?>">Editar</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</section>