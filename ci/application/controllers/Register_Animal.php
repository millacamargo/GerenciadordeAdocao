<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Animal extends CI_Controller {
    
	/*
	 Descrição: Esse método mostra a página de Registrar Animal para o ADM poder inserir animais novos no 
	 abrigo, também colocando o nome do usuario logado no menu. Além disso, chama as options feitas nas
	 respetivas models para mostrar as informações pegas no BD nos selects do html.
	 Autora: Camila Camargo
	 Horas: 10 minutos. 
	 Entrada: Dados dos animais que estão no BD puxadas pelas respectivas models e o primeiro nome do usuário.
	 Saída: A página completa com os selects do html vinculados ao array e o nome do usuário no menu.
	 */
	public function showRegister(){
		$data['dados'] = [
			'options_especies' => $this->Especie_model->selectEspecie(),
			'options_cores' => $this->Cor_model->selectCor(),
			'options_idades' => $this->Idade_Model->selectIdade(),
			'options_sexos' => $this->Sexo_model->selectSexo()
		];
		
        $data['primeironome'] = $this->session->userdata("primeironome");
        
        if(isset($data['primeironome'])){
            $this->load->view("RegisterPet", $data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado!");
            redirect('https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/login',true);
        }
	}

	/*
	 Descrição: Função para inserir dados no BD, em caso de sucesso carregará a página de sucesso e
	 inserirá os dados na tabela Cadastro, caso contrário abrirá uma página de erro.
	 Autora: Camila Camargo
	 Horas: Depende, cada parte do método foi feita em dias diferentes. 
	 Entrada: Dados dos animais.
	 Saída: Funcionalidade de registrar os dados do animal ao escolher no form, leitura de fotos e inserção de dados 
 	 do animal na tabela Cadastro no BD.
	*/
	public function inserir(){
        require_once APPPATH."/models/Animal.php";
        $nome = $this->input->post("nome");
        $descricao = $this->input->post("descricao");
        $especie = $this->input->post("especies");
        $raca = $this->input->post("racas");
        $cor = $this->input->post("cores");
        $idade = $this->input->post("idades");
        $sexo = $this->input->post("sexo");
        $fotoNome = "semfoto.jpg";
        
        // Este if verifica se o caminho ja existe, se não cria um caminho.
        $path = FCPATH. "uploads/";
        if (!file_exists($path)) {
        	mkdir($path);
        }
        
        // Este if verifica se o usuário mandou uma foto, pega o nome para salvar no BD e move ela pra pasta no servidor.
        if (isset($_FILES["foto"])) {
        	$foto = $_FILES["foto"];
        	$fotoNome = $foto['name'];
        	$fullPath = $path . $fotoNome;
        	move_uploaded_file($foto["tmp_name"], $fullPath);
        }
        
        $animal = new Animal($nome,$descricao,$especie,$raca,$cor,$idade,$sexo, $fotoNome);
        if($animal->isValido()){
            $this->load->model("insertdaoPet");
            $this->insertdaoPet->insertObject($animal);
            $this->load->view('Sucesso');
        }else{
            $this->load->view("Erro");
        }
    }
}
?>     