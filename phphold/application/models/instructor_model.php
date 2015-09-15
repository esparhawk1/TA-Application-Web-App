<?php
class instructor_model extends CI_model{
	public function __construct(){
		parent::__construct();
		/*db preloaded from config files*/
	}	

	public function get_course_applicants($course){
		/*
		$sql='SELECT * FROM Application WHERE courseID=? ORDER BY Last_Name';
		$query=$this->db->query($sql, $course);
		/*returns an array containing the whole row, should have all of the applicants application data in the order that the db is holding it.*/
		//return $query->result();
		$query = $this->db->get_where('Application',array('courseID' => $course));
        	$applicant = array();
        	foreach ($query->result() as $key => $value) {
            		array_push($applicant,$value->username);
            		array_push($applicant,$value->comment);
			//array_push($applicant,$value->courseID);
		}
		return $applicant;
	}
	
	public function get_name_applicant($name){
		 $query = $this->db->get_where('Application',array('username' => $course));
                $applicant = array();
                foreach ($query->result() as $key => $value) {
                        array_push($applicant,$value->username);
                        array_push($applicant,$value->comment);
                        //array_push($applicant,$value->courseID);
                }
                return $applicant;
	}

	public function add_note($input){
		$sql='INSERT INTO Application (note) VALUES (?) WHERE username=?';
		/*inserts the note passed in the input array into the note field corresponding to the username also passed in the input array*/
		$this->db->query($sql,array($input[1],$input[0]));
	}

    /*creating a function to show instructor all applicants -chantal*/
    public function show_applicants(){
        $sql1 = "SELECT * FROM Application";
        $query= $this->db->query($sql1);
        if($query->num_rows()>0){
		return $query->result();
        }
	return NULL;
    }

	public function get_courses(){
		$sql='SELECT courseID FROM Course ORDER BY courseID';
		$data=$this->db->query($sql);
		return $data->result();
	}

	public function get_names(){
		$sql='SELECT username, Last_Name, First_Name FROM User ORDER BY Last_Name';
		$data=$this->db->query($sql);
		return $data->result();
	}

    function view_form1()
    {
        $query = $this->db->get_where('User',array('permissions' => "2"));
        // return $query->result();
        $applicant = array();
        foreach ($query->result() as $key => $value) {
            array_push($applicant,$value->username);
            array_push($applicant,$value->comment);
        }
        return $applicant;
    }

	function view_form2()
    {
	$sql="SELECT * FROM Application WHERE username=? AND courseID=?";
	//$query=$this->db->query($sql,array('username'=>$this->input->post('username'), 'course'=>$this->input->post('course')));
        $query = $this->db->get_where('Application',array('username' => $this->input->post('username')));
        $application = array();
        $empty = "";
        if ($query->num_rows()>0)
        {
            foreach ($query->result() as $value)
            	{
                	array_push($application,$value);
            	}
        	return $application;
        	}
        	return $empty;
	}

    function view_comment()
    {
        $query = $this->db->get_where('Comment',array('username' => $this->input->post('username')));
        $comment = array();
        $empty = "";
        if($query->num_rows()>0)
        {
            foreach($query->result() as $key => $value)
            {
                array_push($comment,$value->Inst_name);
                array_push($comment,$value->Inst_comment);
            }
            return $comment;
        }
        return $empty;
    }

    function instructor_make_comment()
    {
        //$query = $this->db->get_where('Comment',array('username' => $this->input->post('username'), 'Inst_name' => $this->session->userdata['user_name']));
        //if($query->num_rows()>0)
        //{
    	//$data = array('Inst_comment' => $this->input->post('admin_comment'), 'Inst_name' => $this->session->userdata['user_name']);
        //$this->db->where('username', $this->input->post('username'));
        //$this->db->update('Comment',$data);
    	//}
    	//else{
    	$data = array('Inst_comment' => $this->input->post('admin_comment'), 'Inst_name' => $this->session->userdata['user_name'], 'username' => $this->input->post('username'));
    	$this->db->insert('Comment',$data);
    	//}

    }
}
?>
