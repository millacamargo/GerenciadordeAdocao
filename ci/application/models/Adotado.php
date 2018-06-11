<?php

class Adotado {
    
    private $nome, $especie, $raca, $primeironome, $email, $id;
    
    /*
	 Descrição: Construtor para os objetos do BD.
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
    public function Adotado ($nome, $especie, $raca, $primeironome, $email, $id=0){
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
        $this->primeironome = $primeironome;
        $this->email = $email;
        $this->id = $id;
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
    public function getPrimeiroNome(){
        return $this->primeironome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getId(){
        return $this->id;
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
            && $this->primeironome != "" 
            && $this->email != "";
    }
    
    	/*
	 Descrição: Método que cria-se um array para receber varias informações de requisição.
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
        $aux["primeironome"] = $this->primeironome;
        $aux["email"] = $this->email;
        $aux["id"] = $this->id;
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
        return "Requisitados";
    }
    
}
?>