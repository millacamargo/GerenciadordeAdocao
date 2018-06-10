<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	// Função para abrir a página de inicio do site
	public function index()
	{
		$this->load->view('index');
	}
		public function contato()
	{
		$this->load->view('contact');
	}
		public function voluntario()
	{
		$this->load->view('volunteer');
	}
		public function sobre()
	{
		$this->load->view('about');
	}
		public function contatolog()
		{
        $data["primeironome"] = $this->session->userdata("primeironome");
        if(isset($data["primeironome"])){
            $this->load->view("contactlogado",$data);
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
            $this->load->view("volunteerlogado",$data);
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

