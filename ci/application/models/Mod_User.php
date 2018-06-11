<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_User extends CI_Model{

    protected $table = 'voluntarios';
	function __construct()
	{
		parent::__construct();
			
	}
	
	public function update($params)
	{
	    $fields = array(
	    
	        'name' =>$params['firstName'],
	        'created_date'=>date('Y-m-d H:i:s')
	    
	    );
	    
	    $this->db->insert($this->table, $fields);
	}
	
}

?>