//Descrição: Metodo que retorna no select as informações no Banco de dados conforme a opção clicada no select acima.
     //Autor: Camila Camargo
     //Tempo: 30 minutos
     //Entrada: São declaradas todas as variaveis necessarias para se criar um novo usuario e inseri-lo no banco
     //Verifica se são validos todos os campos que forem digitados no form
     //Cria-se um array de usuarios para receber varios usuarios

$(function(){
        $('#especies').change(function(){
            $('#racas').html("<option>Carregando...</option>");
            var id_especie = $('#especies').val();
            $.post('https://gerenciadordeadocao-camilacamargo98.c9users.io/ci/index.php/ajax/Raca/getRaca',{
                id_especie : id_especie
            }, function(data){
                $('#racas').html(data);
            });
        });
    });