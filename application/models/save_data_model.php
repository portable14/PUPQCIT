<?php
defined('BASEPATH') OR exit ('No direct access allowed');

class save_data_model extends CI_Model
	{
		public function InsertAdmin($data, $file)
		{

			$data = array(
				'username' => $this->input->post('userName'),
				'user_password' => $this->input->post('password'),
				'user_last_name' => $this->input->post('surName'),
				'user_middle_name' => $this->input->post('middleName'),
				'user_first_name' => $this->input->post('firstName'),
				'user_email_address' => $this->input->post('email'),
				'user_gender' => $this->input->post('gender'),
				'user_address' => $this->input->post('address'),
				'user_contact_number' => $this->input->post('contactNumber'),
				'user_img_name' => $file,
				'role_id' => 'Admin',
				'user_status' => 'Active');
				
			$insert = $this->db->insert('tbl_user', $data);
			
			return $insert;
		}
	}
?>