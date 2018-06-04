<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     //Descrição: Metodo para abrir as páginas de cadastro de usuario e login
     //Autor: Luis Felipe
     //Tempo: 40 minutos
     //Entrada: Foi criado o Controller para cuidar da parte de usuário, onde são carregadas as páginas de
     //cadastro de usuario e login
     
class Usuario extends CI_Controller {
	// Função para abrir a página de cadastro de usuario
	public function register()
	{
		$this->load->view('register');
	}
	
	// Função para abrir a página de login, junto com uma mensagem de erro caso o usuario erre a senha 
	//ou tente acessar páginas cuja autorização só permite o acesso a quem esteja logado
	public function login()
	{
	    $data["msgErro"] = $this->session->userdata("msgErro");
        $this->load->view("login",$data);
        $this->session->unset_userdata("msgErro");
	}
}