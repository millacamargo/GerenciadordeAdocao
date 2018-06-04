<?php 

class Especie_model extends CI_model {
    
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
	 Descrição: Traz todas as especies cadastradas no banco de dados
	 Autora: Camila Camargo
	 Horas: 30 minutos
	 Entrada: 
	 Saída:
	 */
    public function getAll(){
        return $this->db
        ->order_by('especie')
        ->get('Especie');
    }
    
    /**
	 Descrição: monta um select de options com as especies cadastradas.
	 Autora: Camila Camargo
	 Horas: 30 minutos
	 Entrada: 
	 Saída:
	 */
    public function selectEspecie(){
        $options = "<option value=''>Selecione a Especie</option>";
        $especies = $this->getAll();
        foreach($especies -> result() as $especie){
            $options .= "<option value='{$especie->id}'>{$especie->especie}</option>";
        }
        return $options;
    }
}

?>