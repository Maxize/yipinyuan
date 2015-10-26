<?php
class Columns_model extends CI_Model{
	private $tableName;
	function __construct() {
		parent::__construct();
		$tableName = 'columns';
	}
	
	function form_insert($data){
		// Inserting in Table(students) of Database(college)
		$this->db->insert($tableName, $data);
	}

	function getColumns($Number) {
		$this->db->select('*');
        $this->db->from($tableName);
        $this->db->limit($Number);
        
        $query = $this->db->get();

        return $query->result_array();
	}

	

}
?>