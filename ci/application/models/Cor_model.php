<?php 

class Cor_model extends CI_model {
    
    
    public function __construct(){
        parent::__construct();
    }
    
    /*
	 Descrição: Traz todas as cores cadastradas no banco de dados.
	 Autora: Camila Camargo
	 Horas: 10 minutos.
	 Entrada: Dados da tabela Cor do BD.
	 Saída: Retorna os dados para o próximo método poder inserir ao select do html.
	*/
    public function getAll(){
        return $this->db
        ->order_by('cor')
        ->get('Cor');
    }
    
    /*
	 Descrição: Monta um select de options com as cores cadastradas.
	 Autora: Camila Camargo
	 Horas: 10 minutos.
	 Entrada: Dados do getAll que vem da tabela Cor do BD.
	 Saída: Options com o dado cor do BD para poder aparecer dentro do select do html através do array do controller Register_Animal.
	*/
    public function selectCor(){
        $options = "<option value=''>Selecione a Cor</option>".PHP_EOL;
        $cores = $this->getAll();
        foreach($cores -> result() as $cor){
            $options .= "<option value='{$cor->cor}'>{$cor->cor}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>