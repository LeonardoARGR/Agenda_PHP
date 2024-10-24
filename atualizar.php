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
            <div class="container content-container text-center">
                <form action="atualizarCadastro.php" method="post">
                    <label>Insira o ID do evento a ser modificado: <input type="text" name="id"/></label> <br><br>
                    <label>Insira a nova descrição: <textarea rows="8" cols="50" name="descricao"></textarea></label> <br><br>
                    
                    <input class="button" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </body>
</html>
