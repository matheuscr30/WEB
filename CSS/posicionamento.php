<!doctype html>
<html>
<head>
    <title> Posicionamento </title>
    <meta charset="utf-8"/>

    <style type="text/css">

        body{
            background: #61bd8c;
        }

        #conteudo-principal{
            background: #FFFFFF;
            padding: 10px;
            width: 600px;
            height: 2500px;
            position: relative;
            margin: 30px auto;
            margin-top: 120px;
        }

        .caixa{
            background: #1e6f44;
            width: 100px;
            height: 100px;
            color: #FFFFFF;
        }

        #relativo{
            position: relative;
            left: -10px;
            top: 0;
        }

        #absoluta{
            position: absolute;
            top : 0;
        }

        #fixo{
            position: fixed;
            top : 0;
            left : 0;
            width: 100%;
            background: #000;
        }

    </style>
</head>

<body>

    <div id="conteudo-principal">

        <h1> Posicionamento </h1>

        <h4> Relative </h4>
        <div id="relativo" class="caixa"> Relative </div>

        <h4> Absolute </h4>
        <div id="absoluta" class="caixa"> Absolute </div>

        <h4> Fixed </h4>
        <div id="fixo" class="caixa"> Fixed </div>

    </div>

</body>
</html>
