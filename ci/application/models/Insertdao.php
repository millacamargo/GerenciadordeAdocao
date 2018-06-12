<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     //Descrição: Metodo para inserir registros no banco, pegará o que vier da model Usuario quando um novo cadastro for feito 
     //Autor: Luis Felipe
     //Tempo: 5 minutos
     //Entrada: obj representa as classes que tem os métodos toArray e getClassName (Duck Typing)

class InsertDAO extends CI_Model {
    public function insertObject($obj){
        $this->db->insert($obj->getClassName(), $obj->toArray());
    }    
}
?>