<?php 

class Sexo_model extends CI_model {
    
    // o parent::__construct() chama o construct do CI_model, pois quando criamos um construct numa model que extende esta sobrescrevemos o original.    
    public function __construct(){
        parent::__construct();
    }
    
    /*
	 Descrição: Traz todos os sexos cadastrados no banco de dados
	 Autora: Camila Camargo
	 Horas: 10 minutos.
	 Entrada: Dados da tabela Sexo do BD.
	 Saída: Retorna os dados para o próximo método poder inserir ao select do html.
	*/
    public function getAll(){
        return $this->db
        ->order_by('sexo')
        ->get('Sexo');
    }
    
    /*
	 Descrição: monta um select de options com os sexos cadastrados.
	 Autora: Camila Camargo
	 Horas: 10 minutos.
	 Entrada: Dados do getAll que vem da tabela Sexo do BD.
	 Saída: Options com o dado sexo do BD para poder aparecer dentro do select do html através do array do controller Register_Animal.
	*/
    public function selectSexo(){
        $options = "<option value=''>Selecione o Sexo</option>".PHP_EOL;
        $sexos = $this->getAll();
        foreach($sexos -> result() as $sexo){
            $options .= "<option value='{$sexo->sexo}'>{$sexo->sexo}</option>".PHP_EOL;
        }
        return $options;
    }
}

?>