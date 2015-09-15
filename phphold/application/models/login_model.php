<?php
class Login_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    // function add_user()
    // {
    //     $data=array('username' => $this->input->post('username'),'password' => md5($this->input->post('password')),'permissions' => $this->input->post('permissions'));
    //     $this->db->insert('User',$data);
    // }
    function login()
    {
        $query = $this->db->get_where('User',array('username' => $this->input->post('username'),'password' => md5($this->input->post('password'))));

        if($query->num_rows()>0)
        {
            foreach($query->result() as $key => $row)
            {
                $newdata = array('user_name' => $row->username,'user_type' => $row->permissions);
            }

            $this->session->set_userdata($newdata);
            return TRUE;
        }
        return FALSE;
    }
}
?>