<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Voluntario extends CI_Controller{

public function index(){
		$this->load->view("Voluntarios");
	}
	
	public function inserir(){
        require_once APPPATH."/models/volunteer.php";
        $firstName = $this->input->post("firstName");
        $lastName = $this->input->post("lastName");
        $enderVol = $this->input->post("enderVol");
        $cidadeVol = $this->input->post("cidadeVol");
        $cepVol = $this->input->post("cepVol");
        $celVol = $this->input->post("celVol");
        $emailVol = $this->input->post("emailVol");
        $diasDisp = $this->input->post("diasDisp");
        $sobreVol = $this->input->post("sobreVol");
        $id = $this->input->post("id");
        
        $volunteer = new volunteer($firstName, $lastName, $enderVol, $cidadeVol, $cepVol, $emailVol, $celVol, $diasDisp, $sobreVol);
        if($volunteer->isValido()){
            $this->load->model("insertdaoVol");
            $this->insertdaoVol->insertObject($volunteer);
            $this->load->view('SucessoVol');
        }else{
            $this->load->view("ErroVol");
        }
    }
	
	
}

?>