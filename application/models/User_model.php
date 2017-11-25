<?php
	class  User_model extends CI_Model{

    public function __construct() {
      parent::__construct();
    }

    public function checkCredentials($username, $password) {
      $this->db->where("username", $username);
      $this->db->where("password", $password);
      $result = $this->db->get("user");
      $result = $result->result_array();
      return $result;
    }		

}
?>