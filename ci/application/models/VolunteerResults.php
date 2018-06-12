<?php

class VolunteerResults extends CI_model {

    // o parent::__construct() chama o construct do CI_model, pois quando criamos um construct numa model que extende esta sobrescrevemos o original.    
    public function __construct(){
        parent::__construct();
    }
	 
	 /*
	 Descrição: Insere com um array, na ordem solicitada, as informações inseridas pelo usuário e as joga no banco de dados.
	 Autora: Luiza Vasconcelos
	 Horas: Uma tarde 
	 Entrada: Dados dos voluntarios que estão no BD puxadas pelas respectivas models.
	 Saída: Os dados do voluntario em forma de array.
	*/
	 
	 
	public function getAll($params){
        $this->db->select($params['fields']);
        $this->db->order_by($params['order']);
        // $query = $this->db->get_where($this->table, $params['conditions']);
        $query = $this->db->get('voluntarios');
        return $query->result_array();
	}
    
 
}
?>