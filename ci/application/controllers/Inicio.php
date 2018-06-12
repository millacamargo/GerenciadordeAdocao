<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     //Descrição: Metodo para abrir a página inicial, de contato, de cadastro de voluntario e sobre nós 
     //(também foram criadas funções para verificar se o usuario está logado ao abrir essas paginas)
     //Autor: Luis Felipe
     //Tempo: 1 hora
     //Entrada: Foi criado o Controller para cuidar da parte de inicio do, onde são carregadas as páginas de
     //cadastro de voluntario, sobre nós, contato e a index
     
class Inicio extends CI_Controller {
	// Função para abrir a página de inicio do site
	public function index()
	{
		$this->load->view('index');
	}
	// Função para abrir a página de contato
		public function contato()
	{
		$this->load->view('Contatos');
	}
	// Função para abrir a página de cadastro de voluntario
		public function voluntario()
	{
		$this->load->model("Cidade_model");
    
    $data['dados'] = [
			'options_cidades' => $this->Cidade_model->selectCidade()
		];
		$this->load->view('Voluntarios', $data);
	}
	// Função para abrir a página sobre nós
		public function sobre()
	{
		$this->load->view('about');
	}
	// Função para abrir a página de contato apenas se o usuario estiver logado
	//caso contrario apresentarar mensagem de erro
	//AUTORIZAÇÃO
		public function contatolog()
		{
        $data["primeironome"] = $this->session->userdata("primeironome");
        if(isset($data["primeironome"])){
            $this->load->view("Contatoslogado",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
    }
	//Função para abrir a pagina de voluntario apenas quando o usuario estiver logado
	//caso contrario apresentarar mensagem de erro
	//AUTORIZAÇÃO
		public function voluntariolog()
		{
        $data["primeironome"] = $this->session->userdata("primeironome");
        if(isset($data["primeironome"])){
        	$this->load->model("Cidade_model");
    
    $data['dados'] = [
			'options_cidades' => $this->Cidade_model->selectCidade()
		];
            $this->load->view("Voluntarioslogado",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
		}
		
	//Função para abrir a pagina de sobre apenas quando o usuario estiver logado
	//caso contrario apresentarar mensagem de erro
	//AUTORIZAÇÃO		
		public function sobrelog()
		{
        $data["primeironome"] = $this->session->userdata("primeironome");
        if(isset($data["primeironome"])){
            $this->load->view("aboutlogado",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
    }
}
?>

