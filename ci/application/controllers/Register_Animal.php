<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Animal extends CI_Controller {
    
	/*
	 Descrição: Esta função faz a página e o array de informações cadastrais rodarem na view.
	 Autora: Camila Camargo
	 Horas: 10 minutos
	 Entrada: 
	 Saída:
	 */
	public function showRegister()
	{
		
		$dados = [
			'options_especies' => $this->Especie_model->selectEspecie(),
			'options_cores' => $this->Cor_model->selectCor(),
			'options_idades' => $this->Idade_Model->selectIdade(),
			'options_sexos' => $this->Sexo_model->selectSexo()
		];
		$this->load->view('RegisterPet', $dados);
	}
	
	/*
	 Descrição:  
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
	
	public function sucesso()
	{
		$this->load->view('Sucesso');
	}
	

	/*
	 Descrição:  Função para pegar o que foi digitado e selecionado no form, em caso de sucesso recarregará a página de cadastro,
	 caso contrário abrirá uma página de erro
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
		public function inserir(){
        require_once APPPATH."/models/Animal.php";
        $nome = $this->input->post("nome");
        $especie = $this->input->post("especies");
        $raca = $this->input->post("racas");
        $cor = $this->input->post("cores");
        $idade = $this->input->post("idades");
        $sexo = $this->input->post("sexo");
        $animal = new Animal($nome,$especie,$raca,$cor,$idade,$sexo);
        if($animal->isValido()){
            $this->load->model("insertdao");
            $this->insertdao->insertObject($animal);
            redirect('https://gerenciadordeadocao-camilacamargo98.c9users.io/ci/index.php/Register_Animal/sucesso',true);
        }else{
            $this->load->view("Erro");
        }
    }
}
