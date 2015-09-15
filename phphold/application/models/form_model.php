<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ahpeth
 * Date: 4/5/15
 * Time: 3:26 PM
 */
class Form_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
    public function SaveForm($form_data)
    {
        $this->db->insert('Application', $form_data);
        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }

    public function get_courses(){
        $sql='SELECT courseID FROM Course ORDER BY courseID';
        $data=$this->db->query($sql);
        return $data->result();
    }

}
?>

