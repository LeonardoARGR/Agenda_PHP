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
                Eventos Cadastrados
            </div>
    </body>
</html>

<?php

    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $base = 'agenda';
    $conexao = mysqli_connect($host, $user, $pass, $base);
    $resultadoQueryMySQL = mysqli_query($conexao, "select * from evento;");

    echo "<div class='container table-container text-center'>";
    echo "<div class='row row-test title-row justify-content-center'>";

    echo "<div class='col-1 col-test'>ID</div>
    <div class='col-1 col-test'>Nome</div>
    <div class='col-2 col-test'>Data</div>
    <div class='col-1 col-test'>Início</div>
    <div class='col-1 col-test'>Término</div>
    <div class='col-2 col-test'>Descrição</div>
    <div class='col-2 col-test'>Local</div>
    <div class='col-2 col-test'>Responsável</div>";

    echo "</div>";
    while($escrever = mysqli_fetch_array($resultadoQueryMySQL)) {
        echo "<div class='row row-test justify-content-center'>";
        echo "<div class='col-1 col-test'>" . $escrever['id_evento'] . "</div>
        <div class='col-1 col-test'>" . $escrever['nome_evento'] . "</div>
        <div class='col-2 col-test'>" . $escrever['data_evento'] . "</div>
        <div class='col-1 col-test'>" . $escrever['hora_inicio'] . "</div>
        <div class='col-1 col-test'>" . $escrever['hora_fim'] . "</div>
        <div class='col-2 col-test text-start'>" . $escrever['descricao_evento'] . "</div>
        <div class='col-2 col-test'>" . $escrever['local_evento'] . "</div>
        <div class='col-2 col-test'>" . $escrever['responsavel_evento'] . "</div>";
        echo "</div>";
    }



    echo "<a class='home-a row justify-content-center' href='index.php'>Voltar ao menu</a>";

    mysqli_close($conexao);
?>