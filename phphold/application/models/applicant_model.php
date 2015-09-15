<?php
class applicant_model extends CI_model{
	public function __construct(){
		parent::__construct();
		/*database preloaded from config*/
	}
	
	public function get_form_data($username){
		$sql="SELECT * FROM application WHERE username=? LIMIT 1";
		$form_data=$this->db->query($sql,$username);
		return $form_data;
	}
}
?>
