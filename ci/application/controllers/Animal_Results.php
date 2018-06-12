<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_Results extends CI_Controller {
    
    function __construct(){
    	parent::__construct();
    }
    
	/*
	 Descrição: Esse método mostra a página Animais em Adoção para o Usuario poder escolher e adotar, 
	 também mostrando as informações dos animais pegadas no BD através de um array e
	 colocando o nome do usuario logado no menu.
	 Autora: Camila Camargo
	 Horas: Depende, cada parte do método foi feita em dias diferentes. 
	 Entrada: Dados dos animais que estão no BD puxadas pelas respectivas models e o primeiro nome do usuário.
	 Saída: A página completa com o img e as ps do html vinculadas ao array e o nome do usuário no menu.
	*/
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
	
		// processo de pegar os dados do BD
		$data['results'] = $this->Results_model->getAll($data);
		
		$data['primeironome'] = $this->session->userdata("primeironome");
		
        if(isset($data['primeironome'])){
        	$this->load->view("SearchPet",$data);
        }else{
        	$this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
	}
	
	/*
	 Descrição: Função para inserir dados no BD, em caso de sucesso carregará a página de sucessoreq e
	 inserirá os dados na tabela Requisitados, caso contrário abrirá uma página de erroreq.
	 Autora: Camila Camargo
	 Horas: Depende, cada parte do método foi feita em dias diferentes. 
	 Entrada: Dados dos animais e do usuário.
	 Saída: Funcionalidade de adotar o animal por botao, inserção de dados do animal e do interessado
	 na tabela Requisitados no BD.
	*/
	public function inserir($idAnimalAdotado){
        require_once APPPATH."/models/Adotado.php";
        
        // Recebe o id do animal do botao adotar e manda pra model para fazer a comparação.
        $data['conditions'] = array('id'=> $idAnimalAdotado);
        $dataInsert = (array) $this->Results_model->getResultById($data);
        
        // Pega as informações das tabelas Cadastro e Usuario para inserir na tabela Requisitados, assim
        // o usuário ao clicar no botao adotar manda essas infos para uma tabela do adm.
        $nome = $dataInsert["nome"];
        $especie = $dataInsert["especie"];
        $raca = $dataInsert["raca"];
        $primeironome = $this->session->userdata('primeironome');
        $email = $this->session->userdata('email');
        $requisicao = new Adotado($nome,$especie,$raca,$primeironome,$email);
        if($requisicao->isValido()){
            $this->load->model("insertdaoAdotado");
            $this->insertdaoAdotado->insertObject($requisicao);
            $this->load->view('Sucessoreq');
        }else{
            $this->load->view("Erroreq");
        }
    }
}
	
?>