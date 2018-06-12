<?php


class Volunteer {
    
    private $firstName, $lastName, $enderVol, $cidadeVol, $cepVol, $emailVol, $celVol, $diasDisp, $sobreVol, $id;
    /*
	 Descrição: Construtor para os objetos do BD.
	 Autora: Luiza Vasconcelos
	 Horas: 5 minutos.
	 Entrada: Dados dos voluntarios.
	 Saída: não possui valor de retorno, porque você não pode chamar um construtor para um objeto,
	 você só usa o construtor no momento da inicialização do objeto. 
	*/
    public function volunteer ($firstName, $lastName, $enderVol, $cidadeVol, $cepVol, $emailVol, $celVol, $diasDisp, $sobreVol, $id=0){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->enderVol = $enderVol;
        $this->cidadeVol = $cidadeVol;
        $this->cepVol = $cepVol;
        $this->emailVol = $emailVol;
        $this->celVol = $celVol;
        $this->diasDisp = $diasDisp;
        $this->sobreVol = $sobreVol;
        $this->id = $id;
    }
    
   /*
	 Descrição: Métodos para pegar as informações do BD através do que foi declarado no construtor.  
	 Autora: Luiza Vasconcelos
	 Horas: 5 minutos
	 Entrada: Pega os atributos privados declarados na classe.
	 Saída: Retorna os atributos.
	 */
	 
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getEnderVol(){
        return $this->enderVol;
    }
    public function getCidadeVol(){
        return $this->cidadeVol;
    }
    public function getCepVol(){
        return $this->cepVol;
    }
    public function getEmailVol(){
        return $this->emailVol;
    }
    public function getCelVol(){
        return $this->celVol;
    }
    public function getDiasDisp(){
        return $this->diasDisp;
    }
    public function getSobreVol(){
        return $this->sobreVol;
    }
    public function getId(){
        return $this->id;
    }
    
     /*
	 Descrição: Método para fazer comparação das informações inseridas e não deixar enviar se as mais importantes forem vazias.
	 Autora: Luiza Vasconcelos
	 Horas:5 minutos.
	 Entrada: Pega o que retornou do método get.
	 Saída: se for diferente de nulo permite a inserção no BD senão dá erro.
	 */
    
    public function isValido(){
        return $this->firstName != ""
        && $this->lastName != ""
        && $this->enderVol != ""
        && $this->cidadeVol != ""
        && $this->cepVol != ""
        && $this->emailVol != ""
        && $this->celVol != ""
        && $this->diasDisp != ""
        && $this->sobreVol != "";
    }
    
     /*
	 Descrição: Método que cria-se um array para receber varias informações de requisição.
	 Autora: Luiza Vasconcelos
	 Horas: 5 minutos.
	 Entrada: Os atributos retornados pelo método get.
	 Saída: Array desses atributos inseridos.
	 */
   
    public function toArray(){
        $aux = array();
        $aux["firstName"] = $this->firstName;
        $aux["lastName"] = $this->lastName;
        $aux["enderVol"] = $this->enderVol;
        $aux["cidadeVol"] = $this->cidadeVol;
        $aux["cepVol"] = $this->cepVol;
        $aux["emailVol"] = $this->emailVol;
        $aux["celVol"] = $this->celVol;
        $aux["diasDisp"] = $this->diasDisp;
        $aux["sobreVol"] = $this->sobreVol;
        $aux["id"] = $this->id;
        return $aux;
    }
        /*
	 Descrição: Método que pega o nome da tabela do banco para relacionar com o InsertDAO.
	 Autora: Luiza Vasconcelos
	 Horas: 5 minutos
	 Entrada: Dados do voluntario.
	 Saída: Inserção na tabela voluntarios.
	*/
     public function getClassName(){
        return "voluntarios";
    }
}
?>