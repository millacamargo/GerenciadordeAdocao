<?php 

class Idade_Model extends CI_model {
    
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
	 Descrição: Traz todas as especies cadastradas no banco de dados
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
	 Descrição: monta um select de options com as especies cadastradas.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function selectIdade(){
        $options = "<option value=''>Selecione a Idade</option>".PHP_EOL;
        $idades = $this->getAll();
        foreach($idades -> result() as $idade){
            $options .= "<option value='{$idade->id}'>{$idade->idade}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>