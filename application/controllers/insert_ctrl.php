<?php

class insert_ctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('insert_model');
	}
	function index() {
		//Including validation library
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		//Validating Name Field
		$this->form_validation->set_rules('title', 'title', 'required|min_length[5]|max_length[255]');
		// $this->form_validation->set_rules('dAuther', 'author', 'required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('columnId', 'columnId', 'required|min_length[1]');


		if ($this->form_validation->run() == FALSE) {
			echo "error ------";
			$this->load->view('entries/insert_view');
		} else {
			echo "upload now!!!";
			//Setting values for tabel columns
			$data = array(
				'title'       => $this->input->post('title'),
				// 'author'      => $this->input->post('author'),
				// 'create_time' => $this->input->post('createTime'),
				// 'modify_time' => $this->input->post('modifyTime'),
				'content'     => $this->input->post('content'),
				'column_id'   => $this->input->post('columnId')
			);
			//Transfering data to Model
			$this->insert_model->form_insert($data);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			$this->load->view('insert_view', $data);
		}
	}
}

?>