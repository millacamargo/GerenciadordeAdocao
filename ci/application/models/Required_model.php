<?php

class Required_model extends CI_model {
    
    public function __construct(){
        parent::__construct();
    }
    
	/*
	 Descrição: Seleciona os dados da tabela Requisitados do BD para montar o array chamado na controller Required_Animal.
	 Autora: Camila Camargo
	 Horas: 5 minutos.
	 Entrada: Dados da tabela Requisitados.
	 Saída: Um array com esses dados na ordem escolhida também na controller Required_Animal.
	*/
	 
	public function getAll($params){
        $this->db->select($params['fields']);
        $this->db->order_by($params['order']);
        // $query = $this->db->get_where($this->table, $params['conditions']);
        $query = $this->db->get('Requisitados');
        return $query->result_array();
    }
    
}
?>