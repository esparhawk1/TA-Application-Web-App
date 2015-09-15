<?php
class Applicant_controller extends CI_controller{
	private $custom_errors=array();
	public function __construct(){
	parent::__construct();
	/*database preloaded from config files*/
	$this->load->model('applicant_model');
	}

	public function index(){
		this->load->view('header');
		this->load->view('applicant_home');
		this->load->view('footer');
		/*checking which button was pressed in the applicant home view. Edit will pull application from the database and call the form view while passing the application data. The new button will just bring up the form view which should remain blank.*/
		if($this->input->post('new')){
			/*bring up an empty form view, form controller should have logic to save it. Warn them that adding a new application will overwrite a previous application if they have one already*/
			$this->load->view('header');
			$this->load->view('form_view');
			$this->load->view('footer');
		}
		if($this->input->post('edit')){
			/*gets the username from the session info and calls the model to retrieve application associated with the username. model will only bring back 1 application entry.*/
			$form_data=$this->applicant_model->get_form_data($this->session->userdata('username'));
			$this->load->view('header');
			/*passing the application data to the form view to be displayed*/
			$this->load->view('form_view',$form_data);
			$this->load->view('footer');
		}
	}
}
?>
