<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Botoes Bootstrap</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

  </head>
  <body>

   	<div class="container">

        <div class="page-header">
            <h1>Botoes Bootstrap</h1>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h3>Botões Padrão</h3>
                <a href="#" class="btn btn-default">Botão Link</a>
                <input type="submit" class="btn btn-default" value="Botão Submit">
                <button class="btn btn-default">Botão Button</button>
            </div>

            <div class="col-sm-6">
                <h3>Tipos de Botões</h3>
                <button type="submit" class="btn btn-default">Botão</button>
                <button type="submit" class="btn btn-primary">Botão</button>
                <button type="submit" class="btn btn-success">Botão</button>
                <button type="submit" class="btn btn-danger">Botão</button>
                <button type="submit" class="btn btn-warning">Botão</button>
                <button type="submit" class="btn btn-info">Botão</button>
                <button type="submit" class="btn btn-link">Botão</button>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h3>Botões Nivel Bloco</h3>
                <button type="submit" class="btn btn-default btn-block">Botão Button</button>
                <button type="submit" class="btn btn-primary btn-block">Botão Button</button>
                <button type="submit" class="btn btn-danger btn-block">Botão Button</button>
            </div>
            <div class="col-sm-6">
                <h3>Tamanho de Botões</h3>
                <button type="submit" class="btn btn-default btn-xs">Botão</button>
                <button type="submit" class="btn btn-default btn-sm">Botão</button>
                <button type="submit" class="btn btn-default btn-md">Botão</button>
                <button type="submit" class="btn btn-default btn-lg">Botão</button>
            </div>
        </div>

   	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
