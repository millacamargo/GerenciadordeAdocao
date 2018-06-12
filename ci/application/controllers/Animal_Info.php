<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_Info extends CI_Controller {
    
	function __construct(){
		parent::__construct();
    }
    
	/*
	 Descrição: Esse método mostra a página Animais Registrados para o ADM, também dando as opções de
	 deletar os dados, mostrar a tabela pegando as infos do BD através de um array e colocar o nome do
	 usuario logado no menu.
	 Autora: Camila Camargo
	 Horas: Depende, cada parte do método foi feita em dias diferentes. 
	 Entrada: Dados dos animais que estão no BD puxadas pelas respectivas models e o primeiro nome do usuário.
	 Saída: A página completa com a tabela do html vinculada ao array, a função delete e o nome do usuário
	 no menu.
	*/
	public function showPets(){
		$animal_id = NULL;
		$delete = NULL;
		
		extract($_POST);
		
		// processa a deleção de dados
		if($delete){
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
		
		// processo de pegar o primeiro nome do usuário do BD
		$data['primeironome'] = $this->session->userdata("primeironome");
		
        if(isset($data['primeironome'])){
        	$this->load->view("Save_Animal",$data);
        }else{
        	$this->session->set_userdata("msgErro","Você precisa estar logado!");
        	redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
	}
}
?>