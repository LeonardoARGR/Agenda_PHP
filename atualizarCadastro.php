<html>
    <head>
        <title>Agenda</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main-container">
            <div class="container title-container">
                Alterar descrição
            </div>
    </body>
</html>

<?php

    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $base = 'agenda';
    $conexao = mysqli_connect($host, $user, $pass, $base);

    $id = $_POST['id'];
    $descricao = $_POST['descricao'];

    mysqli_query($conexao, "update evento set descricao_evento = '".$descricao."' where id_evento = ".$id.";");

    echo "<div class='container content-container text-center'>";
    echo "<div class='col'>";
    echo "<div class='row justify-content-center title'>Descrição atualizada!</div>";

    echo "<a class='home-a row justify-content-center' href='index.php'>Voltar ao menu</a>";

    echo "</div>";
    echo "</div>";  
    echo "</div>";

    echo '<META HTTP-EQUIV="Refresh" CONTENT="15 ; URL= index.php">';

    mysqli_close($conexao);
?>