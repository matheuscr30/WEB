<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Imagens Bootstrap</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

  </head>
  <body>

   	<div class="container">

        <div class="page-header">
            <h1>Imagens Bootstrap</h1>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h3>Imagem responsiva</h3>
                <img src="imagens/uvas.png" class="img-responsive"/>
            </div>

            <div class="col-sm-6">
                <h3>Imagem não responsiva</h3>
                <img src="imagens/uvas.png"/>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h3>Formas em imagens</h3>
                <img src="imagens/uvas200.png" class="img-circle">
                <img src="imagens/uvas200.png" class="img-rounded">
                <img src="imagens/uvas200.png" class="img-thumbnail">
            </div>
        </div>
   	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
