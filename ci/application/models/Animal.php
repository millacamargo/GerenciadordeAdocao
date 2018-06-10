<?php

class Animal {
    
    private $nome, $descricao, $especie, $raca, $cor, $idade, $sexo, $id;
    
    /*
	 Descrição: Construtor para os objetos do BD.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function Animal ($nome, $descricao,$especie, $raca, $cor, $idade, $sexo, $id=0){
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
        $this->cor = $cor;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->id = $id;
        $this->descricao = $descricao;
    }
    
    /*
	 Descrição: Métodos para pegar as informações do BD.  
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function getNome(){
        return $this->nome;
    }
    public function getEspecie(){
        return $this->especie;
    }
    public function getRaca(){
        return $this->raca;
    }
    public function getCor(){
        return $this->cor;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getId(){
        return $this->id;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    
    	/*
	 Descrição: Método para fazer comparação das informações inseridas e não deixar enviar se as mais importantes forem vazias.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function isValido(){
        return $this->especie != "" 
            && $this->raca != "" 
            && $this->cor != "" 
            && $this->idade != "" 
            && $this->sexo != "" ;
    }
    
    	/*
	 Descrição: Método que cria-se um array para receber varios animais.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function toArray(){
        $aux = array();
        $aux["nome"] = $this->nome;
        $aux["especie"] = $this->especie;
        $aux["raca"] = $this->raca;
        $aux["cor"] = $this->cor;
        $aux["idade"] = $this->idade;
        $aux["sexo"] = $this->sexo;
        $aux["id"] = $this->id;
        $aux["descricao"] = $this->descricao;
        return $aux;
    }
    
    	/*
	 Descrição: Método que pega o nome do banco para relacionar com o InsertDAO.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    //NOME DA TABELA DO BANCO
    public function getClassName(){
        return "Cadastro";
    }
    
}
?>