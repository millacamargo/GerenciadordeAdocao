<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     //Descrição: Metodo para abrir as páginas de cadastro de usuario e login
     //Autor: Luis Felipe
     //Tempo: 3 horas
     //Entrada: Foi criado o Controller para cuidar da parte de usuário, onde são carregadas as páginas de
     //cadastro de usuario e login
     
class Usuario extends CI_Controller {
	// Função para abrir a página de cadastro de usuario
	public function register()
	{
		$this->load->view('register');
	}
	
	// Função para abrir a página de login, junto com uma mensagem de erro caso o usuario erre a senha 
	//ou tente acessar páginas cuja autorização só permitem o acesso a quem estiver logado
	public function login()
	{
	    $data["msgErro"] = $this->session->userdata("msgErro");
        $this->load->view("login",$data);
        $this->session->unset_userdata("msgErro");
	}
	 // Função para pegar o que foi digitado no form, em caso de sucesso recarregará a página de cadastro,
	 //caso contrário abrirá uma página de erro
	public function inserir(){
        require_once APPPATH."/models/Usuario.php";
        $primeironome = $this->input->post("primeironome");
        $segundonome = $this->input->post("segundonome");
        $rg = $this->input->post("rg");
        $cpf = $this->input->post("cpf");
        $numerotel = $this->input->post("numerotel");
        $numerocel = $this->input->post("numerocel");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        $usuario = new Usuario($primeironome,$segundonome,$rg,$cpf,$numerotel,$numerocel,$email,$senha);
        if($usuario->isValido()){
            $this->load->model("insertdao");
            $this->insertdao->insertObject($usuario);
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/usuario/register',true);
        }else{
            $this->load->view("erro");
        }
	}
}