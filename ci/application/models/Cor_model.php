<?php 

class Cor_model extends CI_model {
    
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
	 Descrição: Traz todas as cores cadastradas no banco de dados
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function getAll(){
        return $this->db
        ->order_by('cor')
        ->get('Cor');
    }
    
    /**
	 Descrição: monta um select de options com as cores cadastradas.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function selectCor(){
        $options = "<option value=''>Selecione a Cor</option>".PHP_EOL;
        $cores = $this->getAll();
        foreach($cores -> result() as $cor){
            $options .= "<option value='{$cor->id}'>{$cor->cor}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>