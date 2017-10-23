<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Formularios</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

  </head>
  <body>

   	<div class="container">

        <div class="page-header">
            <h1>Formulário Bootstrap</h1>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <h3>Cadastre-se</h3>
                <form class="" action="#" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" class="form-control">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Aceito os Termos de Serviço
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="opcoes"> PHP
                        </label>
                        <label>
                            <input type="radio" name="opcoes"> JAVA
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Cadastrar</button>
                </form>
            </div>

            <div class="col-sm-4">
                <h3>Logar</h3>
                <form class="" action="#" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                    </div>

                    <button type="submit" class="btn btn-primary">Logar</button>
                </form>
            </div>
        </div>

   	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
