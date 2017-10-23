<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tabela Bootstrap</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

  </head>
  <body>

   	<div class="container">

        <div class="page-header">
            <h1>Tabela Bootstrap</h1>
        </div>

        <table class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Fabricante</th>
                    <th>Preço</th>
                </tr>
            </thead>

            <tbody>
                <tr class="success">
                    <td>Notebook 980</td>
                    <td>HP</td>
                    <td>R$ 1.800,00</td>
                </tr>
                <tr>
                    <td class="danger">MacBook Air</td>
                    <td>Apple</td>
                    <td>R$ 4.800,00</td>
                </tr>
                <tr class="warning">
                    <td>HP Pavillon</td>
                    <td>HP</td>
                    <td>R$ 2.800,00</td>
                </tr>
            </tbody>
        </table>

   	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
