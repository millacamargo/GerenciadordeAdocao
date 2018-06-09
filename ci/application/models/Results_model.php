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
    // public function compareFilter($especies, $racas, $cores, $idades, $sexos){
    //     $this->db->select('Cadastro.especie', 'Cadastro.raca','Cadastro.cor','Cadastro.idade','Cadastro.sexo', 'Especie.especie',
    //     'Raca.raca', 'Cor.cor', 'Idade.idade','Sexo.sexo');
    //     $this->db->from('Cadastro');
    //     $this->db->join('Especie', 'Especie.especie = Cadastro.especie' );
    //     $this->db->join('Raca', 'Raca.raca = Cadastro.raca' );
    //     $this->db->join('Cor', 'Cor.cor = Cadastro.cor' );
    //     $this->db->join('Idade', 'Idade.idade = Cadastro.idade' );
    //     $this->db->join('Sexo', 'Sexo.sexo = Cadastro.sexo' );
    //     $this->db->where(['Especie.especie'=>$especies,'Raca.raca'=>$racas, 'Cor.cor'=>$cores,'Idade.idade'=>$idades,'Sexo.sexo'=>$sexos]);
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    
	
}
