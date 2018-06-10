<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_Results extends CI_Controller {
    
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
	 
	public function showResults()
	{
		// seta os dados da tabela Cadastro para mostrar ao usuario
		$data['fields'] = array(
			'nome',
			'descricao',
			'especie',
			'raca',
			'cor',
			'idade',
			'sexo'
			);
		
		$data['order'] = 'nome';
	
		// processo de pegar os dados do BD
		$data['results'] = $this->Results_model->getAll($data);
		
		$this->load->view('SearchPet', $data);
	}
	
	}
	
