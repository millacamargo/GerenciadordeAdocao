<?php 

class Cidade_model extends CI_model {
    
    // o parent::__construct() chama o construct do CI_model, pois quando criamos um construct numa model que extende esta sobrescrevemos o original.
    public function __construct(){
        parent::__construct();
    }
    
 /*
	 Descrição: Traz todas as ciadades cadastradas no banco de dados.
	 Autora: Luiza Vasconcelos
	 Horas: 10 minutos.
	 Entrada: Dados da tabela Cidade do BD.
	 Saída: Retorna os dados para o próximo método poder inserir ao select do html.
	*/
    public function getAll(){
        return $this->db
        ->order_by('cidade')
        ->get('cidade');
    }
    
     /*
	 Descrição: Monta um select de options com as cidades cadastradas.
	 Autora: Luiza Vasconcelos
	 Horas: 10 minutos.
	 Entrada: Dados do getAll que vem da tabela Cidade do BD.
	 Saída: Options com o dado cidade do BD para poder aparecer dentro do select do html através do array do controller Volunteer.
	*/
    
    public function selectCidade(){
        $options = "<option value=''>Selecione a Cidade</option>".PHP_EOL;
        $cidades = $this->getAll();
        foreach($cidades -> result() as $cidade){
            $options .= "<option value='{$cidade->cidade}'>{$cidade->cidade}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>