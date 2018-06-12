<?php

class Volunteer {
    
    private $firstName, $lastName, $enderVol, $cidadeVol, $cepVol, $emailVol, $celVol, $diasDisp, $sobreVol, $id;
    
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
    
     public function getClassName(){
        return "voluntarios";
    }
}
?>