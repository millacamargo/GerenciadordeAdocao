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
		
		extract($_POST);
		
		$_POST['firstName'] = $firstName;
		$_POST['lastName'] = $lastName;
		$_POST['addressVol'] = $addressVol;
		$_POST['cidadeVol'] = $cidadeVol;
		$_POST['cepVol'] = $cepVol;
		$_POST['celVol'] = $celVol;
		$_POST['diasDisp'] = $diasDisp;
		$_POST['submit'] = $submit;
	
		$this->load->view("Voluntarios");

	}
	
	
}

?>