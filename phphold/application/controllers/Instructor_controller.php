<?php
class Instructor_controller extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('instructor_model');
		$options=array();
	}

	public function index(){

	}
	
	public function loadpage(){
		$box=$this->get_courses();
		$data=array();
		$counter=0;
                foreach ($box['courses'] as $row){
                        foreach($row as $key=>$value){
                                array_push($options["".$counter],$value);
				$counter++;
                        }
                }
		array_push($data,$options);
                $this->load->view('header_instructor');
                $this->load->view('instructor_choose',$data);
	}

	/*public function add_note(){
		$app=$this->input->post('applicant');
		$note=$this->input->post('note');
		if($app==FALSE || $note==FALSE){
			return NULL;
		}
		else{
			$input=array($app,$note);
			$this->instructor_model->add_note($input);
		}
	}*/
//function to return the names of applicants so instructor can select who to comment on -chantal
    public function show_app(){

        $this->load->model('instructor_model');
        $data['userinfo'] = $this->instructor_model->show_applicants();
	if(is_null($data['userinfo'])){
		$this->load->view('error');
	}
	else{

        	$this->load->view('instructor_view_form1', $data);
	}
        //$this->load->view('footer');


    }

	public function get_app(){
		/*$key=$this->input->post('dropdown_menu');
		if($course==FALSE){
			$this->load->view('error');
		}
		else{
			$data['userinfo']=$this->instructor_model->get_course_applicants($options[$key]);
		}*/
		$this->load->model('instructor_model');
		$selection=$this->input->post('course');
		if($selection==FALSE){
			$this->load->view('error');
		}
		else{
			$data['userinfo']=$this->instructor_model->get_course_applicants($selection);
			if(is_null($data['userinfo'])){
				$this->load->view('error');
			}
		}
		$this->load->view('instructor_view_form1',$data);
	}
	
	public function get_app_byname(){
		$this->load->model('instructor_model');
		$selection=$this->input->post('username');
		if($selection==FALSE){
                        $this->load->view('error');
                }
                else{
                        $data['userinfo']=$this->instructor_model->get_name_applicant($selection);
                        if(is_null($data['userinfo'])){
                                $this->load->view('error');
                        }
                }
                $this->load->view('instructor_view_form1',$data);
	}

	public function view_form1()
	{
		$data['userinfo'] = $this->instructor_model->view_form1();
        	$this->load->view('header_instructor');        
    		$this->load->view('instructor_view_form1',$data);

	}
	
	public function view_form2()
    	{
	$this->load->model('instructor_model');
        $data['application'] = $this->instructor_model->view_form2();
        $this->load->view('header_instructor');
        $this->load->view('admin_view_form2',$data);
        // $this->load->view('test');
   	}

	public function make_comment()
	{
		$data['comment'] = $this->instructor_model->view_comment();
        	$data['username'] = $this->input->post('username');
        	$this->load->view('header_instructor');
        	$this->load->view('instructor_view_comment',$data);
	}

	public function make_a_comment()
	{
        	$this->instructor_model->instructor_make_comment();
		$this->load->view('header_instructor');
		$data=$this->get_courses();
		$this->announcement();
		$this->load->view('instructor_home',$data);
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

		public function get_courses(){
		$this->load->model('instructor_model');
		$data['courses']=$this->instructor_model->get_courses();
		return $data;
		/*$names is NOT an associative array, grab each row then use $row->lname or $row->fname*/
	}
	
	public function get_names(){
		$this->load->model('instructor_model');
		$data['names']=$this->instructor_model->get_names();
		return $data;
	}
}
?>
