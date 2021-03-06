<?php
     //Descrição: Metodo com a classe Usuario que será inserido no banco
     //Autor: Luis Felipe
     //Tempo: 50 minutos
     //Entrada: São declaradas todas as variaveis necessarias para se criar um novo usuario e inseri-lo no banco
     //Verifica se não estão vazios
     //Cria-se um array para receber as informações
     
class Usuario {
    
    private $primeironome, $segundonome, $rg, $cpf, $numerotel, $numerocel, $email, $senha, $id;
    
    public function Usuario ($primeironome, $segundonome, $rg, $cpf, $numerotel, $numerocel, $email, $senha, $id=0){
        $this->primeironome = $primeironome;
        $this->segundonome = $segundonome;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->numerotel = $numerotel;
        $this->numerocel = $numerocel;
        $this->email = $email;
        $this->senha = $senha;
        $this->id = $id;
    }
    
    public function getPrimeiroNome(){
        return $this->primeironome;
    }
    public function getSegundoNome(){
        return $this->segundonome;
    }
    public function getRg(){
        return $this->rg;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getNumeroTel(){
        return $this->numerotel;
    }
    public function getNumeroCel(){
        return $this->numerocel;
    }
    public function getEmail(){
        return $this->email;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function isValido(){
        return $this->primeironome != "" 
            && $this->segundonome != "" 
            && $this->rg != "" 
            && $this->cpf != "" 
            && $this->numerotel != "" 
            && $this->numerocel != "" 
            && $this->email != ""
            && $this->senha != "";
    }
    
    public function toArray(){
        $aux = array();
        $aux["primeironome"] = $this->primeironome;
        $aux["segundonome"] = $this->segundonome;
        $aux["rg"] = $this->rg;
        $aux["cpf"] = $this->cpf;
        $aux["numerotel"] = $this->numerotel;
        $aux["numerocel"] = $this->numerocel;
        $aux["email"] = $this->email;
        $aux["senha"] = $this->senha;
        $aux["id"] = $this->id;
        return $aux;
    }
    //Nome da tabela no banco
    public function getClassName(){
        return "Usuario";
    }
}
?>