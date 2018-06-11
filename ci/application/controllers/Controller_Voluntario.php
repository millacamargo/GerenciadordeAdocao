<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Voluntario extends CI_Controller{

		public function __construct(){
		
			parent::__construct();
		}
	
		public function index(){
			
		$firstName = NULL;
		$lastName = NULL;
		$addressVol = NULL;
		$cidadeVol = NULL;
		$cepVol = '';
		$emailVol = NULL;
		$celVol = '';
		$diasDisp = '';
		$sobreVol = NULL;
		$submit = NULL;
		
	
		$this->load->view("Voluntarios");

	}
	
	
}

?>