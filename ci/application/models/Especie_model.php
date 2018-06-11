<?php 

class Especie_model extends CI_model {
    
    
    public function __construct(){
        parent::__construct();
    }
    
    /*
	 Descrição: Traz todas as espécies cadastradas no banco de dados.
	 Autora: Camila Camargo
	 Horas: 2 horas.
	 Entrada: Dados da tabela Espécie do BD.
	 Saída: Retorna os dados para o próximo método poder inserir ao select do html.
	*/
     public function getAll(){
        return $this->db
        ->order_by('especie')
        ->get('Especie');
    }
    
    /*
	 Descrição: Monta um select de options com as espécies cadastradas.
	 Autora: Camila Camargo
	 Horas: 2 horas.
	 Entrada: Dados do getAll que vem da tabela Espécie do BD.
	 Saída: Options com o dado especie do BD para poder aparecer dentro do select do html através do array do controller Register_Animal.
	*/
    public function selectEspecie(){
        $options = "<option value=''>Selecione a Especie</option>".PHP_EOL;
        $especies = $this->getAll();
        foreach($especies -> result() as $especie){
            $options .= "<option value='{$especie->especie}'>{$especie->especie}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>