<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_Results extends CI_Controller {
    
    function __construct(){
    	parent::__construct();
    }
    
    /*
	 Descrição: Seta os dados da tabela Cadastro para mostrar ao usuario
	 Autora: Luiza Vasconcelos
	 Horas: Uma tarde. 
	 Entrada: Dados dos voluntarios que estão no BD puxadas pelas respectivas models e o primeiro nome do mesmo.
	 Saída: A página completa com a tabela do html vinculada ao array, a função delete e o nome do usuário
	 no menu.
	*/
    
    
	public function showResults(){
		
		$data['fields'] = array(
			'firstName',
			'lastName',
			'enderVol',
			'cidadeVol',
			'cepVol',
			'emailVol',
			'celVol',
			'diasDisp',
			'sobreVol'
		);
		
		$data['order'] = 'firstName';
	    $this->load->model("VolunteerResults");
		// processo de pegar os dados do BD
		$data['results'] = $this->VolunteerResults->getAll($data);
		
		$data['primeironome'] = $this->session->userdata("primeironome");
        if(isset($data['primeironome'])){
            $this->load->view("VolunteerResults",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
	
	}
}
	
?>