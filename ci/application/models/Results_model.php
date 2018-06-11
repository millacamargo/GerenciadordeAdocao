<?php

class Results_model extends CI_model {
    
    public function __construct(){
        parent::__construct();
    }
    
	/*
	 Descrição: Seleciona os dados da tabela Cadastro do BD para montar o array chamado nas controllers Animal_Info e Animal_Results.
	 Autora: Camila Camargo
	 Horas: 30 minutos.
	 Entrada: Dados da tabela Cadastro.
	 Saída: Um array com esses dados na ordem escolhida também nas controllers Animal_Info e Animal_Results.
	*/
	 
	public function getAll($params){
        $this->db->select($params['fields']);
        $this->db->order_by($params['order']);
        // $query = $this->db->get_where($this->table, $params['conditions']);
        $query = $this->db->get('Cadastro');
        return $query->result_array();
	}
    
    /*
	 Descrição: Recebe o id do animal do botao adotar, busca no banco, compara e retorna para a tabela do adm os dados na controller Required_Animals. 
	 Autora: Camila Camargo
	 Horas: 1 hora.
	 Entrada: Id dos animais que estão na tabela Cadastro do BD.
	 Saída: Dados relacionados a esse Id para unir na tabela Requisitados.
	*/
	public function getResultById($params){
        $query = $this->db->get_where('Cadastro', $params['conditions'])->row();
        return $query;
    }
	 
    /*
	 Descrição: Esse método insere dentro do array cada animal selecionado na tabela que está na controller Animal_Info para poder deletá-lo do banco
	 caso seja adotado. Podem ser selecionados vários animais de uma vez.
	 Autora: Camila Camargo
	 Horas: 2 horas
	 Entrada: Id do animal da tabela Cadastro no BD.
	 Saída: Comparação do Id do dado que está no banco com o que está selecionado no html, se for igual ele deleta.
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
?>