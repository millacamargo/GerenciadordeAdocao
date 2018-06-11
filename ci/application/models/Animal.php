<?php

class Animal {
    
    private $nome, $descricao, $especie, $raca, $cor, $idade, $sexo, $id;
    
    /*
	 Descrição: Construtor para os objetos do BD.
	 Autora: Camila Camargo
	 Horas: 5 minutos.
	 Entrada: Dados dos animais.
	 Saída: não possui valor de retorno, porque você não pode chamar um construtor para um objeto,
	 você só usa o construtor no momento da inicialização do objeto. 
	*/
    public function Animal ($nome, $descricao,$especie, $raca, $cor, $idade, $sexo, $foto, $id=0){
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
        $this->cor = $cor;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->id = $id;
        $this->descricao = $descricao;
        $this->foto = $foto;
    }
    
    /*
	 Descrição: Métodos para pegar as informações do BD através do que foi declarado no construtor.  
	 Autora: Camila Camargo
	 Horas: 15 minutos
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
	 Horas: 10 minutos.
	 Entrada: Pega o que retornou do método get.
	 Saída: se for diferente de nulo permite a inserção no BD senão dá erro.
	 */
    public function isValido(){
        return $this->especie != "" 
            && $this->raca != "" 
            && $this->cor != "" 
            && $this->idade != "" 
            && $this->sexo != "" ;
    }
    
    /*
	 Descrição: Método que cria-se um array para receber varias informações de requisição.
	 Autora: Camila Camargo
	 Horas: 10 minutos.
	 Entrada: Os atributos retornados pelo método get.
	 Saída: Array desses atributos inseridos.
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
        $aux["foto"] = $this->foto;
        return $aux;
    }
    
    /*
	 Descrição: Método que pega o nome da tabela do banco para relacionar com o InsertDAO.
	 Autora: Camila Camargo
	 Horas: 5 minutos
	 Entrada: 
	 Saída:
	*/
    public function getClassName(){
        return "Cadastro";
    }
}
?>