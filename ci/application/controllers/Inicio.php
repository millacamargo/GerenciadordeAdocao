<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	// Função para abrir a página de inicio do site
	public function index()
	{
		$this->load->view('index');
	}
}
?>

