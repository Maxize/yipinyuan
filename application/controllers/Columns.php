<?php

class Columns extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Columns_model');
		$this->load->helper('url');
	}

	function index() {
		//Including validation library
		$data['ColumnsList'] = $this->Columns_model->getColumns(5);
		$this->load->view('columns/show_view', $data);
	}

	function insert () {
		
	}
}

?>