<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class registerVolunteer extends CI_Model{


		public function index(){
	
			$this->load->view("Voluntarios");
		}
		
}

?>