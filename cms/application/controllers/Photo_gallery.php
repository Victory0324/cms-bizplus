<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo_gallery extends MY_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_photo_gallery');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_photo_gallery'] = $this->Model_common->all_page_photo_gallery();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_blogs'] = $this->Model_common->all_blogs();
		
		$data['photo_gallery'] = $this->Model_photo_gallery->all_photo();

		$this->load->view('view_header',$data);
		$this->load->view('view_photo_gallery',$data);
		$this->load->view('view_footer',$data);
	}
}
