<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_Results extends CI_Controller {
    
	/*
	 Descrição:  
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
	 
	public function showResults()
	{
		$this->load->view('Results');
	}
	

	
}
