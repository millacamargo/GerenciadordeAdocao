<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_Info extends CI_Controller {
    
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
	 
	public function showPets()
	{
		$animal_id = NULL;
		$delete = NULL;
		
		extract($_POST);
		
		if($delete){
			// processa a deleção de dados
			$this->Results_model->deleta($animal_id);
		}
		// seta os dados da tabela Cadastro para mostrar ao usuario
		$data['fields'] = array(
			'id',
			'nome',
			'especie',
			'raca',
			'cor',
			'idade',
			'sexo'
			);

		$data['order'] = 'nome';
	
		// processo de pegar os dados do BD
		$data['results'] = $this->Results_model->getAll($data);
		
		$data['primeironome'] = $this->session->userdata("primeironome");
        if(isset($data['primeironome'])){
            $this->load->view("Save_Animal",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
		
	}
	
}