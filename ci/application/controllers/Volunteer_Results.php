<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_Results extends CI_Controller {
    
    function __construct(){
    	parent::__construct();
    }
    
	public function showResults(){
		// seta os dados da tabela Cadastro para mostrar ao usuario
		$data['fields'] = array(
			'foto',
			'nome',
			'descricao',
			'especie',
			'raca',
			'cor',
			'idade',
			'sexo',
			'id'
		);
		
		$data['order'] = 'nome';
	    $this->load->model("VolunteerResults");
		// processo de pegar os dados do BD
		$data['results'] = $this->VolunteerResults->getAll($data);
		
		$this->load->view("VolunteerResults",$data);
	
	
	
?>