<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_and_conditions extends MY_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_term'] = $this->Model_common->all_page_term();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_blogs'] = $this->Model_common->all_blogs();

		$this->load->view('view_header',$data);
		$this->load->view('view_term_and_condition',$data);
		$this->load->view('view_footer',$data);
	}
}