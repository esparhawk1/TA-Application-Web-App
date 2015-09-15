<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

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
		$this->load->model('admin_model');
	}

// 	public function index(){
// 		$this->load->view('header');
// 		$this->load->view('admin_home');
// 		//$this->load->view('footer');
		
// 		if($this->input->post('view')){
// 			$app=$this->input->post('applicant');
// 			if($app!=FALSE){/*checking to make sure the applicant exists*/
// 				/*searches DB for the applicants application and returns an array of the whole row returned. Then passing that array of data to the form view for display*/
// 				$data=$this->Admin_model->get_applicant_data($app);
// 				$this->load->view('Form_view',$data);
// 			}
// 			else{
// 				/*error message of some sort?*/
// 			}
// 		}
// 		if($this->input->post('add_note')){
// 			$app=$this->input->post('applicant');
// 			$note=$this->input->post('note');
// 			/*checking to make sure the applicant and note fields aren't NULL*/
// 			if($app!=FALSE && $note!=FALSE){
// 				/*placing applicant/note into an array to be used in the query*/
// 				$input=array($app,$note);
// 				$this->db->add_note($input);
// 			}
// 			else{
// 				/*some sort or error message?*/
// 			}
// 		}
// 	}
// //function to return the names of applicants so instructor can select who to comment on -chantal
//     public function show_app(){

//         //$this->load->model('admin_model');
//        $data['applicants'] = $this->admin_model->show_applicants();
//         $this->load->view('header');
//         $this->load->view('Admin_view', $data);
//         //$this->load->view('footer');


//     }
    public function home_admin()
    {
        $this->load->view('header_admin');
        $this->announcement_view();
        $this->load->view('admin');
    }
    public function announcement_view()
    {
        $data['ss'] = $this->admin_model->get_announcement();
        if($this->session->userdata('user_type') == '0')
        {
            $data['er'] = 1;
        }
        $this->load->view('announcement',$data);
    }
    public function view_form1()
    {
    	$data['userinfo'] = $this->admin_model->view_form1();
        $this->load->view('header_admin');        
    	$this->load->view('admin_view_form1',$data);
    }
    public function view_form2()
    {
    	$data['application'] = $this->admin_model->view_form2();
        $this->load->view('header_admin');                
    	$this->load->view('admin_view_form2',$data);
    	// $this->load->view('test');
    }
    public function test()
    {
    	$this->load->view('test');
    }
    // public function view_comment()
    // {
    // 	$data = $this->admin_model->view_comment();
    // 	$this->load->view('admin_view_comment',$data);
    // }
    public function create_course()
    {
        $this->load->view('header_admin');                
    	$this->load->view('admin_create_course');
    }
    public function create_course_logic()
    {
    	$this->admin_model->create_course();
        $this->home_admin();                
    }
    public function assign_ta()
    {
        $today = getdate();
        if(($today[year] >=2015) && ($today[mon] >= 5) && ($today[mday] >= 20))
            $this->load->view("pass");
        else{
    	$data['course'] = $this->admin_model->load_course();
        $this->load->view('header_admin');        
    	$this->load->view('course_view1',$data);
        }
    }
    public function assign_ta_to_course()
    {
    	$data['app_course'] = $this->admin_model->applicant_for_course();
        $this->load->view('header_admin');        
    	$this->load->view('course_view2',$data);
    }
    public function enter_score()
    {
    	$this->admin_model->enter_score();
    	$this->home_admin();
    }
    // public function assign_ta()
    // {
    // 	$this->load->view('admin_assign_ta');
    // }
    public function make_comment()
    {
        // $this->load->view('test');
        $data['comment'] = $this->admin_model->view_comment();
        $data['username'] = $this->input->post('username');
        $this->load->view('header_admin');
        $this->load->view('admin_view_comment',$data);
    }
    public function assign_ta_to_this_course()
    {
        $this->admin_model->assign_ta_to_this_course();
        $this->home_admin();
    }
    public function announcement()
    {
        $this->admin_model->post_announcement();
        $this->home_admin();
    }
    public function erase_announcement()
    {
        $this->admin_model->erase_announcement();
        $this->home_admin();
    }
    public function make_a_comment()
    {
        $this->admin_model->admin_make_comment();
        $this->home_admin();
    }
}
?>
