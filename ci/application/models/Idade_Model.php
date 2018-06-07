<?php 

class Idade_Model extends CI_model {
    
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
	 Descrição: Traz todas as idades cadastradas no banco de dados
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function getAll(){
        return $this->db
        ->order_by('idade')
        ->get('Idade');
    }
    
    /**
	 Descrição: monta um select de options com as idades cadastradas.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
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