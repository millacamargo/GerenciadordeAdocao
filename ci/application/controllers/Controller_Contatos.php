<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Contatos extends CI_Controller {
	
	public function index(){
		$this->load->view('Contatos');
		$this->load->library('email');
		
	}

	/**
	 Descrição: Puxa as variáveis do formulário da página de "Contatos.php", pega o parâmetro inserido pelo usuário, e, 
	 por último, libera o protocolo SMTP para o envio do e-mail.

	 Autora: Luiza Vasconcelos
	 
	 Horas: 1 dia
	 
	 Entrada: Os dados inseridos pelo usuário no formulário de Contato.
	
	 Saída: Um e-mail destinado aos administradores do site.
	 
	 */
	

	public function postEmail(){

	$this->email->initialize($config);  
	
	$nome = $_POST['name'];
	$email = $_POST['email'];
	$assunto = $_POST['subject'];
	$msg = $_POST['message'];
	$caixaPostalServidorNome = 'WebSite | Formulário';
	
	$headers = "From ". $nome;
	
	$corpoemail = 'Fale Conosco - Adotando um Animal
			
			Nome: ' .$nome. '
			E-mail: ' .$email. '
			Assunto: ' .$assunto. '
			Mensagem: ' .$msg. ' ';
	
	
	$mail = new PHPMailer();
	 
	$mail->IsSMTP();
	$mail->SMTPAuth  = true;
	$mail->Charset   = 'utf8_decode()';
	$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);
	$mail->Port  = '587';
	$mail->IsHTML(true);

	}
}