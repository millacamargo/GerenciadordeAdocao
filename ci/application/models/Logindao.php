<?php
 //Descrição: Metodo para selecionar tudo de um usuario
     //Autor: Luis Felipe
     //Tempo: 40 minutos
     //Entrada: Vai puxar o email e senha que foram inseridos na tabela de usuario
     //Se o numero de linhas for igual a 1 (se houver usuario), ele retornará tudo de um usuario de acordo
     //com o email e senha digitados, caso contrario retornará nulo.
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginDAO extends CI_Model {
    public function getUser($email,$senha){
            $this->db->where('email',$email);
		    $this->db->where('senha',$senha);
		    $usr = $this->db->get('Usuario');
		    require_once APPPATH."models/Usuario.php";
		    if ($usr->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $usuario = $usr->result()[0];
		        $id = $usuario->id;
		        $primeironome = $usuario->primeironome;
		        $segundonome = $usuario->segundonome;
		        $rg = $usuario->rg;
		        $cpf = $usuario->cpf;
		        $numerotel = $usuario->numerotel;
		        $numerocel = $usuario->numerocel;
		        $emailUsu = $usuario->email;
		        $senhaUsu = $usuario->senha;
		        return new Usuario($primeironome,$segundonome,$rg,$cpf,$numerotel,$numerocel,$emailUsu,$senhaUsu,$id);
            }else{
                return null;
            }
    }
}