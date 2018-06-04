<?php
    class Raca extends CI_controller {
        
        public function __construct(){
            parent::__construct();
        }
        
        
        public function getRaca(){
            
            $id_especie = $this->input->post('id_especie');
            
            echo $this->Raca_model->selectRacas($id_especie);
        }
        
    }
?>