<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_Animal extends CI_Controller {
    
	/*
	 Descrição: 
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
	public function openSearch()
	{
		$this->load->view('Search');
	}
	
	
}
