<?php

class Adotado {
    
    private $nome, $especie, $raca, $primeironome, $email, $id;
    
    /*
	 Descrição: Construtor para os objetos do BD.
	 Autora: Camila Camargo
	 Horas: 5 minutos.
	 Entrada: Dados dos animais e dos usuários que pretendem adotá-los.
	 Saída: não possui valor de retorno, porque você não pode chamar um construtor para um objeto,
	 você só usa o construtor no momento da inicialização do objeto. 
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
	 Descrição: Métodos para pegar as informações do BD através do que foi declarado no construtor.  
	 Autora: Camila Camargo
	 Horas: 5 minutos
	 Entrada: Pega os atributos privados declarados na classe.
	 Saída: Retorna os atributos.
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
	 Horas: 5 minutos.
	 Entrada: Pega o que retornou do método get.
	 Saída: se for diferente de nulo permite a inserção no BD senão dá erro.
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
	 Horas: 5 minutos.
	 Entrada: Os atributos retornados pelo método get.
	 Saída: Array desses atributos inseridos.
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
	 Descrição: Método que pega o nome da tabela do banco para relacionar com o InsertDAO.
	 Autora: Camila Camargo
	 Horas: 5 minutos
	 Entrada: Dados do animal e do usuário.
	 Saída: Inserção na tabela Adotado.
	*/
    public function getClassName(){
        return "Requisitados";
    }
}
?>