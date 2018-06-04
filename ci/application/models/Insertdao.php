<?php
define('BASEPATH') OR exit('No direct script access allowed');

     //Descrição: Metodo para inserir registros no banco
     //Autor: Luis Felipe
     //Tempo: 5 minutos
     //Entrada: obj representa as classes que tem os métodos toArray e getClassName (Duck Typing)

class InsertDAO extends CI_Model {
        public function insertObject($obj) {
            $this->db->insert($obj->getClassName(), $obj->toArray());
        }
}