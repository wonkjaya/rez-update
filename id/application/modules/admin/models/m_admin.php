<?php
class M_admin extends CI_Model
{
  function select_pass($user){
  	$this->db->where('username',$user);
  	$data=$this->db->get('users')->row();
  	if(count($data) > 0){
  		return $data->password;
  	}else{
  		return 'salah';
  	}
  }
  
  
   
  


}
//end of file
