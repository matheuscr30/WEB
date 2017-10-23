<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Tooltip e PopOver</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

  </head>
  <body>

   	<div class="container">

        <div class="page-header">
            <h1>Bootstrap Tooltip e PopOver</h1>
        </div>

        <h3>Tooltip</h3>
        <button type="button" class="btn btn-default"
        data-toggle="tooltip" data-placement="left" title="Detalhes do Item">Dica</button>
        <br><br>

        <div class="btn-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Tocar">
                    <span class="glyphicon glyphicon-play"></span>
                </button>

                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Pausar">
                    <span class="glyphicon glyphicon-pause"></span>
                </button>

                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Parar">
                    <span class="glyphicon glyphicon-stop"></span>
                </button>
            </div>
        </div>

        <h3>Popover</h3>
        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover"
        title="Detalhes" data-content="Alguns detalhes sobre sua iofanfkakdf">Detalhes</button>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            $('[data-toggle="popover"]').popover()
        })
    </script>
  </body>
</html>
