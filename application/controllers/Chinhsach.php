<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chinhsach extends CI_Controller {
	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->data['com']='chinhsach';
        $this->load->model('frontend/Mcategory');
        $this->load->model('frontend/Mproduct');
    }
    
	public function index(){
        $this->data['title']='VTStore - Chính Sách';
        $this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}
}
