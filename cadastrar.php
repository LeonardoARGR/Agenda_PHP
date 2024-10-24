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
            <div class="container content-container text-center">
                <form action="finalizarCadastro.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <label>Nome do evento: <input type="text" name="nome"/></label>
                        </div>
                        <div class="col-4">
                        <label>Data do evento: <input type="date" name="data"/></label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <label>Início do evento: <input type="time" name="h_inicio"/></label>
                        </div>
                        <div class="col-5">
                            <label>Término do evento: <input type="time" name="h_termino"/></label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <label>Descrição do evento: <br>
                            <textarea rows="8" cols="50" name="descricao"></textarea></label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <label>Local do evento: <input type="text" name="local"/></label>
                        </div>
                        <div class="col-6">
                            <label>Responsável pelo evento: <input type="text" name="responsavel"/></label>
                        </div>
                    </div>
                    
                    <input class="button" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </body>
</html>
