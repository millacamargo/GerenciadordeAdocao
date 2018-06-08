<?php
     //Descrição: Metodo com a classe Usuario que será inserido no banco
     //Autor: Camila Camargo
     //Tempo: 30 minutos
     //Entrada: São declaradas todas as variaveis necessarias para se criar um novo usuario e inseri-lo no banco
     //Verifica se são validos todos os campos que forem digitados no form
     //Cria-se um array de usuarios para receber varios usuarios
class Animal {
    
    private $nome, $especie, $raca, $cor, $idade, $sexo, $id;
    
    public function Animal ($nome, $especie, $raca, $cor, $idade, $sexo, $id=0){
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
        $this->cor = $cor;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->id = $id;
    }
    
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
    
    public function isValido(){
        return $this->especie != "" 
            && $this->raca != "" 
            && $this->cor != "" 
            && $this->idade != "" 
            && $this->sexo != "" ;
    }
    
    public function toArray(){
        $aux = array();
        $aux["nome"] = $this->nome;
        $aux["especie"] = $this->especie;
        $aux["raca"] = $this->raca;
        $aux["cor"] = $this->cor;
        $aux["idade"] = $this->idade;
        $aux["sexo"] = $this->sexo;
        $aux["id"] = $this->id;
        return $aux;
    }
    //NOME DA TABELA DO BANCO
    public function getClassName(){
        return "Cadastro";
    }
    
}
?>