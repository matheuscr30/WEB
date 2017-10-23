<!doctype html>
<html>
<head>
    <title> Elementos Flutuantes </title>
    <meta charset="utf-8"/>

    <style type="text/css">
        #resumo-noticia{
            border: 1px solid gray;
            width: 250px;
            height: 300px;
            float: left;
            margin: 10px;
        }

        .clear{
            clear: both;
        }
    </style>
</head>

<body>

    <div id="resumo-noticia">
        <h2> Elemento Flutuante 1</h2>
        <p>
            Lorem ipsum dolor sit amet, no sed autem iudico quando, vim cu mundi persequeris. Eos ex albucius menandri. Pro id eloquentiam appellantur. Minimum patrioque ius no, tamquam habemus eu vis.
        </p>
    </div>

    <div id="resumo-noticia">
        <h2> Elemento Flutuante 2</h2>
        <p>
            Lorem ipsum dolor sit amet, no sed autem iudico quando, vim cu mundi persequeris. Eos ex albucius menandri. Pro id eloquentiam appellantur. Minimum patrioque ius no, tamquam habemus eu vis.
        </p>
    </div>

    <div class="clear">
        Lorem ipsum dolor sit amet, no sed autem iudico quando, vim cu mundi persequeris. Eos ex albucius menandri. Pro id eloquentiam appellantur. Minimum patrioque ius no, tamquam habemus eu vis.
    </div>

    <div> Todos os direitos reservados </div>

</body>
</html>
