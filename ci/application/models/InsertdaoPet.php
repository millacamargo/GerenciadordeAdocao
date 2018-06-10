<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     //Descrição: Metodo para inserir registros no banco
     //Autor: Camila Camargo
     //Tempo: 5 minutos
     //Entrada: obj representa as classes que tem os métodos toArray e getClassName (Duck Typing)

class InsertDAOPet extends CI_Model {
    public function insertObject($obj){
        $this->db->insert($obj->getClassName(), $obj->toArray());
    }    
}