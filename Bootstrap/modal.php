<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Modal Window</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

  </head>
  <body>

   	<div class="container">

        <div class="page-header">
            <h1>Bootstrap Modal Window</h1>
        </div>

        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#janela">
            Logar
        </button>

        <form class="modal fade" id="janela">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                        <h4 class="modal-title"> Efetuar Login </h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Digite seu email">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Digite sua senha">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancelar
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Logar
                        </button>
                    </div>

                </div>
            </div>
        </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
