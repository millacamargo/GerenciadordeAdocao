<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Animal extends CI_Controller {
    
	/**
	 Descrição: Esta função faz a página rodar.
	 Autora: Camila Camargo
	 Horas: 7 minutos
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
	
}
