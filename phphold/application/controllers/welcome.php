<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() 
	{
		parent::__construct();
		// $this->load->model('user_model');
		//$this->load->library('../controllers/Instructor_controller');
	}
	public function index()
	{
		if($this->session->userdata('user_name') != "")
		{
			if ($this->session->userdata('user_type') == '2')//applicant
				$this->apply();
			else if($this->session->userdata('user_type') == '1'){
				//staff
				//$this->load->view('header'); //want to load standard header before instructor view-chantal
				//needed names from the db before we called the view in order to populate the drop down box
				$this->load->view('header_instructor');
				$c=$this->get_courses();
				//$n=$this->get_names();
				$this->announcement();
				$this->load->view('instructor_home',$c);
				//$this->Instructor_controller->loadpage();
				}
			else if($this->session->userdata('user_type') == '0')
			{//admin
				$this->load->view('header_admin');
				$this->announcement();
				$this->load->view('admin');
			}
		}
		else
		{
			$this->load->view('home');
		}
	}
    public function home()
    {
        if($this->session->userdata('user_name') != "")
        {
            if ($this->session->userdata('user_type') == '2')//applicant
                $this->apply();
            else if($this->session->userdata('user_type') == '1'){//staff
                //$this->load->view('header'); //want to load standard header before instructor view-chantal
			// $names=$this->get_names();
                // $this->load->view('instructor_home',$names);
                				$this->load->view('header_instructor');
				$data=$this->get_courses();
				$this->announcement();
				$this->load->view('instructor_home',$data);

		}
            else if($this->session->userdata('user_type') == '0')//admin
                {
                $this->load->view('header_admin');
                $this->announcement();
                $this->load->view('admin');
            	}
        }
        else
        {
            $this->load->view('login');
        }
    }

	public function registration()
	{
		if($this->session->userdata('user_name') != "")
		{
			$this->index();
		}
		else
		{
		$this->load->view('registration');
		}
	}
	public function registration_logic()
	{
		$this->load->model('registration_model');
		// $this->test();
		
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','trim|required|min_length[4]|xss_clean');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
			$this->form_validation->set_rules('permissions','User Type','required');
			if($this->form_validation->run() == FALSE) 
			{
				$this->error();
				//instead of loading a new page. how about adding a JQuery or JS popup box instead?
				//alert("Failed to create an account!");
			}
			else 
			{
				$this->registration_model->add_user();
				$this->load->view('thanks');
				
				//instead of loading a new page. how about adding a JQuery or JS popup box instead?
				//alert("Successfully Created account!");
			}
		
	}
	public function login()
	{
		$this->load->model('login_model');
		// $this->test();
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() == FALSE)
			{
				//$this->error();
				$this->load->view('registration');
			}
			else
			{
				$result = $this->login_model->login();
				if($result)
				{
					$this->index();
				}
				else
				{
					$data = array(
						'login' => 'FALSE'
						);
					$this->load->view('login',$data);
				}
			}
		
	}
	public function test()
	{
		$this->load->view('test');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
	public function announcement()
	{
		$this->load->model('admin_model');
    	$data['ss'] = $this->admin_model->get_announcement();
   		if($this->session->userdata('user_type') == '0')
   		{
   			$data['er'] = 1;
   		}
    	$this->load->view('announcement',$data);
	}
    public function apply()
    {
    	$this->load->view('applicant_header');
    	$this->announcement();
        $this->load->view('applicant');
        // $this->load->view('footer');
    }
    public function error()
    {
    	$this->load->view('error');
    }


	//getting list of names for all applicants for instructor_view drop down box. Needs to be in here since we're calling the view in this index.
	public function get_courses(){
		$this->load->model('instructor_model');
		$data['courses']=$this->instructor_model->get_courses();
		return $data;
		/*$names is NOT an associative array, grab each row then use $row->lname or $row->fname*/
	}

	public function get_names(){
                $this->load->model('instructor_model');
                $data=$this->instructor_model->get_names();
                return $data;
                /*$names is NOT an associative array, grab each row then use $row->lname or $row->fname*/
        }	

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
