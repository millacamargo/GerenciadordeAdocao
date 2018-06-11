<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertdaoVol extends CI_Model {
    
    public function insertObject($obj){
        $this->db->insert($obj->getClassName(), $obj->toArray());
    }    
}
?>