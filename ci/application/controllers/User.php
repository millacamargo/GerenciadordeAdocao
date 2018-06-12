<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     //Descrição: Metodo para abrir as páginas de cadastro de usuario e login
     //Autor: Luis Felipe
     //Tempo: 7 horas
     //Entrada: Foi criado o Controller para cuidar da parte de usuário, onde são carregadas as páginas de
     //cadastro de usuario, login e a dashboard do site, além da função de inserir um novo usuario de acordo com o que foi digitado no form de cadastro
     //e as funções para autenticar e deslogar
     
class User extends CI_Controller {
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
	
	 // Função para pegar o que foi digitado no form, em caso de sucesso redirecionará para pagina de login,
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
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/sucesso',true);
        }else{
            $this->load->view("erro");
            header("Refresh: 4;url=https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/register");
        }
    }
    //Função para abrir a pagina de sucesso caso o cadastro seja efetuado com sucesso
    public function sucesso(){
        $this->load->view("success");
        header("Refresh: 4;url=https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login");
    }
    
    //Função para autenticar-se e iniciar uma sessão
    //AUTENTICAÇÃO
	public function autenticar(){
        $email = $this->input->post("email");
        $senha = $this->input->post("password");
        $this->load->model("logindao");
        $usuario = $this->logindao->getUser($email,$senha);
        //Validação de usuario, inicia uma session, abre a dash e pega o primeiro nome do usuario logado
        if ($email == "felipe@felipe.com" and $senha == "felipe"){
            $this->session->set_userdata(array("primeironome" => $usuario->getPrimeiroNome(), 'email' => $usuario->getEmail()));
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/Animal_Info/showPets',true);
        }elseif(isset($usuario)) {
            $this->session->set_userdata(array("primeironome" => $usuario->getPrimeiroNome(), 'email' => $usuario->getEmail()));
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/dashboard',true);
        }else{
        //Se ocorrer algum problema com usuario ou senha 
            $this->session->set_userdata("msgErro","Login ou senha inválidos!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
    }
	
		//Função para deslogar-se e encerrar a sessão
        public function logout(){
        $this->session->unset_userdata("primeironome");
        redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/index',true);
    }
        //Função para abrir a página principal do site se o usuario estiver logado, caso contrario retorna para a página de login
        //AUTORIZAÇÃO
	 public function dashboard(){
        $data["primeironome"] = $this->session->userdata("primeironome");
        if(isset($data["primeironome"])){
            $this->load->view("dashboard",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
    }
}

?>