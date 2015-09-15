<?php
class Login_controller extends CI_controller{
	private $custom_errors=array();
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('Login_model','',TRUE);
	}
	public function index(){
		$this->form_validation->set_rules('username','required|max_length[30]');
		$this->form_validation->set_rules('password','required|max_length[30]');
		if($this->form_validation->run()==FALSE || $this->Login_model->get_username($username)==NULL){
			$this->load->view('login');
		}
		else{
			$this->load->view('form_view');
		}
	}
}
?>
