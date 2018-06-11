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
			'sexo',
			'id'
			);
		
		$data['order'] = 'nome';
	
		// processo de pegar os dados do BD
		$data['results'] = $this->Results_model->getAll($data);
		
		$this->load->view('SearchPet', $data);
	}
	
		/*
	 Descrição:  Função para pegar o que foi digitado e selecionado no form, em caso de sucesso carregará a página de sucesso,
	 caso contrário abrirá uma página de erro
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
		public function inserir($idAnimalAdotado){
        require_once APPPATH."/models/Adotado.php";
        $data['conditions'] = array('id'=> $idAnimalAdotado);
        $dataInsert = (array) $this->Results_model->getResultById($data);
        
        $nome = $dataInsert["nome"];
        $especie = $dataInsert["especie"];
        $raca = $dataInsert["raca"];
        $primeironome = $this->session->userdata('primeironome');
        $email = $this->session->userdata('email');
        
        $requisicao = new Adotado($nome,$especie,$raca,$primeironome,$email);
        if($requisicao->isValido()){
            $this->load->model("insertdaoAdotado");
            $this->insertdaoAdotado->insertObject($requisicao);
            $this->load->view('Sucessoreq');;
        }else{
            $this->load->view("Erroreq", var_dump($requisicao), var_dump($dataInsert));
        }
        
        }
	
	}
	
