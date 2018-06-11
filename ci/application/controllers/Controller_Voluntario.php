<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Voluntario extends CI_Controller{

		public function __construct(){
		
			parent::__construct();
			
			$this->load->model(array('Mod_User'));
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
		
		$params['firstName'] = $firstName;
		$params['lastName'] = $lastName;
		$params['addressVol'] = $addressVol;
		$params['cidadeVol'] = $cidadeVol;
		$params['cepVol'] = $cepVol;
		$params['celVol'] = $celVol;
		$params['diasDisp'] = $diasDisp;
		$params['submit'] = $submit;
		
		if (isset($submit)){
		$this->Mod_User->update($params);	
			
		}
		
		
		$this->load->view("Voluntarios");
		
		
		

	}
	
	
}

?>