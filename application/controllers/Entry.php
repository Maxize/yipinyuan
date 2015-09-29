<?php

class Entry extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Entry_model');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	function index() {
		//Including validation library
		$this->load->view('entries/insert_view');
	}

	function insert () {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		//Validating Name Field
		$this->form_validation->set_rules('title', 'title', 'required|min_length[5]|max_length[255]');
		// $this->form_validation->set_rules('dAuther', 'author', 'required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('columnId', 'columnId', 'required|min_length[1]');


		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			//Setting values for tabel columns
			date_default_timezone_set("Asia/Shanghai");
			$cur_date = date('Y-m-d H:i:s');
			$cur_author = "AmnonMa";
			$data = array(
				'title'       => $this->input->post('title'),
				'author'      => $cur_author,
				'modify_time' => $cur_date,
				'content'     => $this->input->post('content'),
				'column_id'   => $this->input->post('columnId')
			);
			//Transfering data to Model
			$this->Entry_model->form_insert($data);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			$this->load->view('entries/insert_view', $data);
		}
	}

	function show ($id) {
		
		$data['Entries'] = $this->Entry_model->getEntriesByColumnId($id);
		$this->load->view('entries/show_view', $data);

	}
}

?>