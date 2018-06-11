<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Required_Animals extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }
    
	/*
	 Descrição:  
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
	 
	public function showRequired()
	{

		// seta os dados da tabela Cadastro para mostrar ao usuario
		$data['fields'] = array(
			'nome',
			'especie',
			'raca',
			'primeironome',
			'email',
			'dt_requisicao'
		
			);

		$data['order'] = 'nome';
	
		// processo de pegar os dados do BD
		$data['results'] = $this->Required_model->getAll($data);
		
		$this->load->view('RequiredPet', $data);
		
	}
	
}