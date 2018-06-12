<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertdaoVol extends CI_Model {
    /*
	 Descrição: Metodo para inserir registros no banco.
	 Autora: Luiza Vasconcelos
	 Horas: 5 minutos.
	 Entrada: obj representa as classes que tem os métodos toArray e getClassName (Duck Typing).
	 Saída: Insere na tabela do BD os dados do voluntario que será registrado.
	*/
    public function insertObject($obj){
        $this->db->insert($obj->getClassName(), $obj->toArray());
    }    
}
?>