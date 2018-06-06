<?php
    class Raca extends CI_controller {
        	/**
	 Descrição:
	 Autora: Camila Camargo
	 Horas: 
	 Entrada: 
	 Saída:
	 */
        public function __construct(){
            parent::__construct();
        }
        
        	/**
	 Descrição: Esta função chama o ajax e o raca model para vincular os dois.
	 Autora: Camila Camargo
	 Horas: 7 minutos
	 Entrada: 
	 Saída:
	 */
        public function getRaca(){
            
            $id_especie = $this->input->post('id_especie');
            
            echo $this->Raca_model->selectRacas($id_especie);
        }
        
    }
?>