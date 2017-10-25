var rodada = 1;
var matriz_jogo = Array(3);

matriz_jogo['a'] = [0, 0, 0];
matriz_jogo['b'] = [0, 0, 0];
matriz_jogo['c'] = [0, 0, 0];

$(document).ready(function(){

    $('#btn-iniciar-jogo').click(function(){

        if($('#apelido-jogador1').val() == ''){
            alert('Apelido do Jogador 1 nao foi preenchido');
            return false;
        }

        if($('#apelido-jogador2').val() == ''){
            alert('Apelido do Jogador 2 nao foi preenchido');
            return false;
        }

        $('#nome-jogador1').html($('#apelido-jogador1').val());
        $('#nome-jogador2').html($('#apelido-jogador2').val());

        $('#pagina_inicial').hide();
        $('#palco_jogo').show();
    });

    $('.jogada').click(function(){
        var id_campo_clicado = this.id;
        $('#'+id_campo_clicado).off();
        jogada(id_campo_clicado);
    });

    function jogada(id){
        var icone = '';
        var ponto = 0;

        if((rodada%2) == 1){
            icone = 'url("imagens/marcacao_1.png")';
            ponto = -1;
        } else {
            icone = 'url("imagens/marcacao_2.png")';
            ponto = 1;
        }

        rodada++;
        $('#'+id).css('background', icone);

        var linha_coluna = id.split('-');
        matriz_jogo[linha_coluna[0]][linha_coluna[1]-1] = ponto;

        verifica_combinacao();
    }

    function verifica_combinacao(){

        var pontos = 0;
        for(var i = 0; i < 3; i++){
            pontos += matriz_jogo['a'][i];
        }
        ganhador(pontos);

        var pontos = 0;
        for(var i = 0; i < 3; i++){
            pontos += matriz_jogo['b'][i];
        }
        ganhador(pontos);

        var pontos = 0;
        for(var i = 0; i < 3; i++){
            pontos += matriz_jogo['c'][i];
        }
        ganhador(pontos);

        for(var i = 0; i < 3; i++){
            pontos = 0;
            pontos += matriz_jogo['a'][i] + matriz_jogo['b'][i] + matriz_jogo['c'][i];
            ganhador(pontos);
        }

        pontos = 0;
        pontos += matriz_jogo['a'][1] + matriz_jogo['b'][2] + matriz_jogo['c'][3];
        ganhador(pontos);

        pontos = 0;
        pontos += matriz_jogo['a'][3] + matriz_jogo['b'][2] + matriz_jogo['c'][1];
        ganhador(pontos);
    }

    function ganhador(pontos){

        if(pontos == -3){
            var apelido = $('#apelido-jogador1').val();
            alert(apelido + ' é o vencedor');
            $('.jogada').off();
        }

        if(pontos == 3){
            var apelido = $('#apelido-jogador2').val();
            alert(apelido + ' é o vencedor');
            $('.jogada').off();
        }
    }
});
