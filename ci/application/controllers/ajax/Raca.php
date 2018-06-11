<?php
    class Raca extends CI_controller {
    
        public function __construct(){
            parent::__construct();
        }
        
    /*
	 Descrição: Esta função chama o ajax e o raça model para vincular os dois.
	 Autora: Camila Camargo
	 Horas: 10 minutos
	 Entrada: Id das especies.
	 Saída: As respectitivas raças dessas espécies que será puxado pelo jquery via post.
	 */
        public function getRaca(){
            
            $id_especie = $this->input->post('id_especie');
            
            echo $this->Raca_model->selectRacas($id_especie);
        }
    }
?>