<?php
class Admin_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
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
    // function view_comment()
    // {
    //     $query = $this->db->get('Comment');
    //     foreach ($query->result() as $value)
    //     {
    //         $comment = array(
    //             'username' => $value->username,
    //             'comment' => $value->comment
    //             );
    //     }
    //     return $comment;
    // }
    function create_course()
    {
        $data=array('course_name' => $this->input->post('Coursename'),'courseID' => $this->input->post('CourseId'));
        $this->db->insert('Course',$data);
    }
    function load_course()
    {
        $query = $this->db->get('Course');
        $course = array();
        foreach ($query->result() as $value)
        {
            array_push($course,$value->courseID);
            array_push($course,$value->TA);
            array_push($course,$value->course_name);
        }
        return $course;
    }
    function applicant_for_course()
    {
        $query = $this->db->get_where('Application',array('courseID' => $this->input->post('courseID')));
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
    function enter_score()
    {
        $data = array('Score' => $this->input->post('score'));
        $this->db->where('appId',$this->input->post('appID'));
        $this->db->update('Application',$data);
    }
    function view_comment()
    {
        $query = $this->db->get_where('Comment',array('username' => $this->input->post('username')));
        $comment = array();
        $empty = "";
        if($query->num_rows()>0)
        {
            foreach($query->result() as $value)
            {
                array_push($comment,$value->Inst_name);
                array_push($comment,$value->Inst_comment);
            }
            return $comment;
        }
        return $empty;
    }
    function assign_ta_to_this_course()
    {
        $data = array('TA' => $this->input->post('username'));
        $this->db->where('courseID',$this->input->post('coursename'));
        $this->db->update('Course',$data);
    }
    function post_announcement()
    {
        $time = getdate();
        $data = array('Anoun' => $this->input->post('announcement'), 'time_mon' => $time[mon] ,'time_day' => $time[mday], 'time_hour' => $time[hours], 'time_minute' => $time[minutes]);
        $this->db->insert('Announcement',$data);
    }
    function get_announcement()
    {
        $query = $this->db->get('Announcement');
        $course = array();
        foreach ($query->result() as $value)
        {
            array_push($course,$value->Announ_ID);
            array_push($course,$value->Anoun);
            array_push($course,$value->time_mon);
            array_push($course,$value->time_day);
            array_push($course,$value->time_hour);
            array_push($course,$value->time_minute);
        }
        return $course;
    }
    function erase_announcement()
    {
        $this->db->delete('Announcement',array('Announ_ID' => $this->input->post('ID')));
    }
    function admin_make_comment()
    {
        $data = array('comment' => $this->input->post('admin_comment'));
        $this->db->where('username', $this->input->post('username'));
        $this->db->update('User',$data);
    }

}
?>