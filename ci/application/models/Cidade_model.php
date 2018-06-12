<?php 

class Cidade_model extends CI_model {
    
    // o parent::__construct() chama o construct do CI_model, pois quando criamos um construct numa model que extende esta sobrescrevemos o original.
    public function __construct(){
        parent::__construct();
    }
    

    public function getAll(){
        return $this->db
        ->order_by('cidade')
        ->get('cidade');
    }
    
    public function selectCidade(){
        $options = "<option value=''>Selecione a Cidade</option>".PHP_EOL;
        $cidades = $this->getAll();
        foreach($cidades -> result() as $cidade){
            $options .= "<option value='{$cidade->cidade}'>{$cidade->cidade}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>