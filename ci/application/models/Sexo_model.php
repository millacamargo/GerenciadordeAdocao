<?php 

class Sexo_model extends CI_model {
    
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
	 Descrição: Traz todos os sexos cadastrados no banco de dados
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function getAll(){
        return $this->db
        ->order_by('sexo')
        ->get('Sexo');
    }
    
    /**
	 Descrição: monta um select de options com os sexos cadastrados.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function selectSexo(){
        $options = "<option value=''>Selecione o Sexo</option>".PHP_EOL;
        $sexos = $this->getAll();
        foreach($sexos -> result() as $sexo){
            $options .= "<option value='{$sexo->sexo}'>{$sexo->sexo}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>