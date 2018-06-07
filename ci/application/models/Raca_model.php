<?php

class Raca_model extends CI_model{
    
    
     public function __construct(){
        parent::__construct();
    }
    
     /**
	 Descrição: Traz todas as cidades da especie informada.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function getRacasByIdEspecie($id_especie = null){
        return $this->db
        ->where("id_especie", $id_especie)
        ->order_by('raca')
        ->get('Raca');
    }
    
    /**
	 Descrição: Monta um select com as raças selecionadas da espécie.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function selectRacas($id_especie = null){
        
        $racas = $this->getRacasByIdEspecie($id_especie);
        
        $options = "<option>Selecione a raça</option>".PHP_EOL;
        
        foreach ($racas -> result() as $raca){
            $options .= "<option value='{$raca->id_raca}'>{$raca->raca}</option>".PHP_EOL;
        }
        
        return $options;
    }

    
}



?>