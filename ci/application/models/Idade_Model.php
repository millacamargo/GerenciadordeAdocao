<?php 

class Idade_Model extends CI_model {
    
    // o parent::__construct() chama o construct do CI_model, pois quando criamos um construct numa model que extende esta sobrescrevemos o original.  
    public function __construct(){
        parent::__construct();
    }
    
    /*
	 Descrição: Traz todas as idades cadastradas no banco de dados.
	 Autora: Camila Camargo
	 Horas: 10 minutos.
	 Entrada: Dados da tabela Idade do BD.
	 Saída: Retorna os dados para o próximo método poder inserir ao select do html.
	*/
    public function getAll(){
        return $this->db
        ->order_by('idade')
        ->get('Idade');
    }
    
    /*
	 Descrição: Monta um select de options com as idades cadastradas.
	 Autora: Camila Camargo
	 Horas: 10 minutos.
	 Entrada: Dados do getAll que vem da tabela Idade do BD.
	 Saída: Options com o dado idade do BD para poder aparecer dentro do select do html através do array do controller Register_Animal.
	*/
    public function selectIdade(){
        $options = "<option value=''>Selecione a Idade</option>".PHP_EOL;
        $idades = $this->getAll();
        foreach($idades -> result() as $idade){
            $options .= "<option value='{$idade->idade}'>{$idade->idade}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>