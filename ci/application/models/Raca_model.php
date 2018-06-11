<?php

class Raca_model extends CI_model{
    
    
     public function __construct(){
        parent::__construct();
    }
    
    /*
	 Descrição: Traz todas as raças da especie informada.
	 Autora: Camila Camargo
	 Horas: 2 horas
	 Entrada: Dados da tabela Raça do BD.
	 Saída: Retorna os dados para o próximo método poder inserir ao select do html.
	*/
    public function getRacasByIdEspecie($id_especie = null){
        return $this->db
        ->where("especie", $id_especie)
        ->order_by('raca')
        ->get('Raca');
    }
    
    /*
	 Descrição: Monta um select com as raças selecionadas da espécie.
	 Autora: Camila Camargo
	 Horas: 10 horas, se contar os 3 dias separados que trabalhei na solução disso.
	 Entrada: Dados do getRacasByEspecie que vem da tabela Raça do BD.
	 Saída: Options com o dado raça do BD para poder aparecer dentro do select do html através do Ajax.
	*/
    public function selectRacas($id_especie = null){
        
        $racas = $this->getRacasByIdEspecie($id_especie);
        
        $options = "<option>Selecione a raça</option>".PHP_EOL;
        
        foreach ($racas -> result() as $raca){
            $options .= "<option value='{$raca->raca}'>{$raca->raca}</option>".PHP_EOL;
        }
        
        return $options;
    }
}
?>