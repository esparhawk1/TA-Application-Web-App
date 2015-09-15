<?php
class Registration_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    function add_user()
    {
        $data=array('username' => $this->input->post('username'),'password' => md5($this->input->post('password')), 'permissions' => $this->input->post('permissions'));
        $this->db->insert('User',$data);
    }
}
?>