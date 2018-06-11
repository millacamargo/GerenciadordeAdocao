<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Required_Animals extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }
    
	/*
	 Descrição: Esse método mostra a página de Animais Requisitados para o ADM poder visualizar os animais do 
	 abrigo que foram escolhidos pelos usuários e quando foram escolhidos, também colocando o nome do usuario logado no menu. 
	 Autora: Camila Camargo
	 Horas: 10 minutos. 
	 Entrada: Dados dos animais, dos usuários interessados e data da requisição que estão no BD puxadas pelas respectivas 
	 models e o primeiro nome do usuário.
	 Saída: A página completa com a tabela do html vinculada ao array e o nome do usuário no menu.
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
		
		$data['primeironome'] = $this->session->userdata("primeironome");
        if(isset($data['primeironome'])){
            $this->load->view("RequiredPet",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
	}
}
?>