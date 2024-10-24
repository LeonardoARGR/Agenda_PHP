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
                Cadastro de evento
            </div>
    </body>
</html>

<?php

    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $base = 'agenda';
    $conexao = mysqli_connect($host, $user, $pass, $base);

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $data = date('Y-m-d');
    $h_inicio = $_POST['h_inicio'];
    $h_termino = $_POST['h_termino'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $responsavel = $_POST['responsavel'];

    mysqli_query($conexao, "insert into evento(nome_evento, data_evento, hora_inicio, hora_fim, descricao_evento, local_evento, responsavel_evento) values('".$nome."', '".$data."', '".$h_inicio."', '".$h_termino."', '".$descricao."', '".$local."', '".$responsavel."');");

    $id = mysqli_query($conexao, "select MAX(id_evento) as maxId FROM evento");
    $escrever = mysqli_fetch_array($id);

    echo "<div class='container content-container text-center'>";
    echo "<div class='col'>";
    echo "<div class='row justify-content-center title'>Cadastro realizado!</div>";
    echo "<div class='row justify-content-center text'>O ID do evento é: " . $escrever[0] . "</div>";

    echo "<a class='home-a row justify-content-center' href='index.php'>Voltar ao menu</a>";

    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo '<META HTTP-EQUIV="Refresh" CONTENT="15 ; URL= index.php">';

    mysqli_close($conexao);
?>