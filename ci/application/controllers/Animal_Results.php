<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_Results extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }
	/*
	 Descrição:  
	 Autora: Camila Camargo
	 Horas: 1 minuto
	 Entrada: 
	 Saída:
	 */
	 
	public function showResults()
	{
		// seta os dados da tabela Cadastro para mostrar ao usuario
		$data['fields'] = array(
			'nome',
			'especie',
			'raca',
			'cor',
			'idade',
			'sexo'
		
			);
		// available data has del_flag = 0 and deleted data has del_flag = 1
		// $data['conditions'] = array(
		// 	'del_flag' => 0
		// 	);
		
		$data['order'] = 'nome';
	
		// processo de pegar os dados do BD
		$data['results'] = $this->Results_model->getAll($data);
		
		// var_dump($data['results']);die;
		
	    // Array de options para chamar na view.
	 //   $data['dados'] = [
		// 	'options_especies' => $this->Especie_model->selectEspecie(),
		// 	'options_cores' => $this->Cor_model->selectCor(),
		// 	'options_idades' => $this->Idade_Model->selectIdade(),
		// 	'options_sexos' => $this->Sexo_model->selectSexo()
		// ];
		
		$this->load->view('SearchPet', $data);
	}
	
	// 	public function getResults(){
// 		$especies = $this->input->post('especies');
// 		$racas = $this->input->post('racas');
// 		$cores = $this->input->post('cores');
// 		$idades = $this->input->post('idades');
// 		$sexos = $this->input->post('sexos');
// 		// $data['fields'] = array(
// 		// 	'nome',
// 		// 	'especie',
// 		// 	'raca',
// 		// 	'cor',
// 		// 	'idade',
// 		// 	'sexo'
		
// 		// 	);
// 		// $data['order'] = 'nome';
// 		// $data['results'] = $this->Results_model->getAll($data);
// 		$data['dados'] = [
// 			'options_especies' => $this->Especie_model->selectEspecie(),
// 			'options_cores' => $this->Cor_model->selectCor(),
// 			'options_idades' => $this->Idade_Model->selectIdade(),
// 			'options_sexos' => $this->Sexo_model->selectSexo()
// 		];
// 		$data['compareFilter'] = $this->Results_model->compareFilter($especies, $racas, $cores, $idades, $sexos);
// 		echo '<pre>';
// 		print_r($data['compareFilter']);
// 		echo '</pre>';
// 		exit();
// 		$this->load->view('Get_Results', $data);
// 	}
	
// 	// function sendMail(){
// 	// 	$this->load->library('email');
// 	// 	$this->email->from('')
// 	// }
	}
	
