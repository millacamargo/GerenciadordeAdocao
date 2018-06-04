<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Animal extends CI_Controller {
    
	/**
	 Descrição: Esta função faz a página rodar.
	 Autora: Camila Camargo
	 Horas: 10min
	 Entrada: 
	 Saída:
	 */
	public function showRegister()
	{
		// essa levou 2 horas
		$this->load->model('Especie_model');
		$dados = [
			'options_especies' => $this->Especie_model->selectEspecie()
		];
		$this->load->view('RegisterPet', $dados);
	}
	
}
