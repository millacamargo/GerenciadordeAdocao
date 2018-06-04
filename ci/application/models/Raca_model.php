<?php

class Raca_model extends CI_model{
    
    
     public function __construct(){
        parent::__construct();
    }
    
     /**
	 Descrição: 
	 Autora: Camila Camargo
	 Horas: 2 horas
	 Entrada: 
	 Saída:
	 */
    public function getRacasByIdEspecie($id_especie = null){
        return $this->db
        ->where("ID_ESPECIE", $id_especie)
        ->order_by('raca')
        ->get('Raca');
    }
    
    

    
}



?>