<?php
class Entry_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	
	function form_insert($data){
		// Inserting in Table(students) of Database(college)
		$this->db->insert('entries', $data);
	}

	function getEntriesByColumnId($Id) {
		$this->db->select('*');
        $this->db->from('entries');
        $this->db->where('column_id', $Id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return null;
	}
}
?>