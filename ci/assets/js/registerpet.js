//Descrição: Metodo que retorna no select as raças do Banco de dados conforme a opção clicada no select de espécie.
//Autor: Camila Camargo
//Tempo: Depende, se contar que quebrei a cabeça com esse método foram uns 3 dias nisso.
//Entrada: 
//Saída:

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