<?php
Class User extends CI_Model
{
 function login($username, $user_password)
 {
   $this -> db -> select('id, username, password');
   $this -> db -> from('tbl_user');
   $this -> db -> where('username', $username);
   $this -> db -> where('user_password',($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>