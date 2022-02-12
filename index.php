<?php include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agenda Desafio</title>
</head>

<body>

    <div class="container">
        <h2>Agenda Desafio</h2>
        <section>
            <nav>
                <a href="./index.php?menuop=home">Home</a>
            </nav>
            <hr>
        </section>
        <?php

        $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

        switch ($menuop) {
            case 'home':
                include("./php/home/home.php");
                break;
            case 'contatoCreate':
                include("./php/contatos/contatoCreate.php");
                break;
            case 'insertPessoa':
                include("./php/contatos/insertPessoa.php");
                break;
            case 'editarPessoa':
                include("./php/contatos/editarPessoa.php");
                break;
            case 'atualizarPessoa':
                include("./php/contatos/atualizaPessoa.php");
                break;
            default:
                include("./php/home/home.php");
                break;
        }

        ?>
        <hr>
</body>
</div>

</html>