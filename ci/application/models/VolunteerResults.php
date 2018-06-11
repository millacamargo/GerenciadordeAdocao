<?php

class VolunteerResults extends CI_model {

    // o parent::__construct() chama o construct do CI_model, pois quando criamos um construct numa model que extende esta sobrescrevemos o original.    
    public function __construct(){
        parent::__construct();
    }
	 
	public function getAll($params){
        $this->db->select($params['fields']);
        $this->db->order_by($params['order']);
        // $query = $this->db->get_where($this->table, $params['conditions']);
        $query = $this->db->get('voluntarios');
        return $query->result_array();
	}
    
 
}
?>