
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Calculadora</title>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<script type="text/javascript">
			function calcular(){
				var operacao = document.getElementById('operacao').value;

				var num1 = document.getElementById('num1').value;

				var num2 = document.getElementById('num2').value;

				//forçando o tipo de variável
				num1 = parseFloat(num1);
				num2 = parseFloat(num2);

				if(num1 == '' || num1 == null){
					alert('Favor digitar um número válido para operação (num1)');
					return false;
				}

				if(num2 == '' || num2 == null){
					alert('Favor digitar um número válido para operação (num2)');
					return false;
				}

				var resultado = null;

				switch(operacao){

					case '1': //subtracao
						resultado = num1 - num2;
						break;

					case '2': //adição
						resultado = num1 + num2;
						break;

					case '3': //multiplicação
						resultado = num1 * num2;
						break;

					case '4': //divisão
						resultado = num1 / num2;
						break;

					default:
						alert('A opção selecionada é inválida');
						return false;
				}

				document.getElementById('resultado').value = resultado;

			}
		</script>
	</head>

	<body>

		<div class="container">
			<div class="jumbotron">
				<h1>CALCULADORA</h1>
			</div>

			<hr />

			<div class="row">
				<div class="col-md-4">
					<input id="num1" type="text" class="form-control" placeholder="Digite um número" />
				</div>

				<div class="col-md-4">
					<select id="operacao" class="form-control">
						<option value="">--Selecione uma operação</option>
						<option value="1">Subtração</option>
						<option value="2">Adição</option>
						<option value="3">Multiplicação</option>
						<option value="4">Divisão</option>
					</select>
				</div>

				<div class="col-md-4">
					<input id="num2" type="text" class="form-control" placeholder="Digite um número"/>
				</div>
			</div>

			<hr />

			<div class="row">
				<div class="col-md-4"></div>

				<div class="col-md-4"></div>

				<div class="col-md-4">
					<button type="button" class="btn btn-lg btn-primary pull-right" onclick="calcular()">Calcular</button>
				</div>
			</div>

			<hr />

			<div class="well">
				Resultado: <input id="resultado" type="text" class="form-control" readonly/>
			</div>
		</div>
	</body>
</html>
