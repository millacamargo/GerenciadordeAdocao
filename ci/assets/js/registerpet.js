$(function(){
        $('#especies').change(function(){
            var id_especie = $('#especies').val();
            $.post('https://gerenciadordeadocao-camilacamargo98.c9users.io/ci/index.php/ajax/Raca/getRaca',{
                id_especie : id_especie
            }, function(data){
                $('#racas').html(data);
            });
        });
    });
    