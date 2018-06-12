<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Voluntario extends CI_Controller{

public function index(){
   
    $this->load->model("Cidade_model");
    
    $data['dados'] = [
			'options_cidades' => $this->Cidade_model->selectCidade()
		];
		
		$this->load->view("Voluntarios", $data);
	}
	
	/*
	 Descrição: Função para inserir dados no BD, em caso de sucesso carregará a página de sucesso e
	 inserirá os dados na tabela Voluntarios, caso contrário abrirá uma página de erro.
	 Autora: Luiza Vasconcelos
	 Horas: Um dia. 
	 Entrada: Dados dos voluntarios.
	 Saída: Funcionalidade de registrar os dados do voluntario ao escolher no form e inserção de dados 
 	 do voluntario na tabela voluntarios no BD.
	*/
	
	public function inserir(){
        require_once APPPATH."/models/Volunteer.php";
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
            $this->load->model("InsertdaoVol");
            $this->InsertdaoVol->insertObject($volunteer);
            $this->load->view('SucessoVol');
        }else{
            $this->load->view("ErroVol");
        }
    }
	
	
}

?>