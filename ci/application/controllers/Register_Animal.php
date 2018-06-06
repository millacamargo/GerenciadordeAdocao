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
			'options_especies' => $this->Especie_model->selectEspecie()
		];
		$this->load->view('RegisterPet', $dados);
	}
	
}
