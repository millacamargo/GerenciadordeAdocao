<?php

class Results_model extends CI_model {
    
    public function __construct(){
        parent::__construct();
    }
    
	/*
	 Descrição:  
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
	 
	public function getAll($params){
        $this->db->select($params['fields']);
        $this->db->order_by($params['order']);
        // $query = $this->db->get_where($this->table, $params['conditions']);
        $query = $this->db->get('Cadastro');
        return $query->result_array();
    }
    
    /*
	 Descrição:  
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function deleta($params){
        foreach($params as $animal_id){
            $conditions = array(
                'id' => $animal_id
            );
            $this->db->where($conditions);
            $this->db->delete('Cadastro');
        }
    }
}
