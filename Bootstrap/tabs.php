<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Tabs</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

  </head>
  <body>

   	<div class="container">

        <div class="page-header">
            <h1>Bootstrap Tabs</h1>
            <p class="lead">Alterne facilmente as abas</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#info" data-toggle="tab">Informacoes</a></li>
            <li><a href="#avaliacoes" data-toggle="tab">Avaliacoes</a></li>
            <li><a href="#compre" data-toggle="tab">Compre Tambem</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade in active" role="tabpanel" id="info">
                <h3>Informacoes</h3>
                <p>Lorem ipsum dolorem sit amet</p>
            </div>

            <div class="tab-pane fade" role="tabpanel" id="avaliacoes">
                <h3>Avaliacoes</h3>
                <p>Lorem ipsum dolorem sit amet</p>
            </div>

            <div class="tab-pane fade" role="tabpanel" id="compre">
                <h3>Compre Tambem</h3>
                <p>Lorem ipsum dolorem sit amet</p>
            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
