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
  
  function view_product(){
  	$this->db->join('productdetail','productdetail.idproduct=products.idproduct','left');
  	return $this->db->get('products')->result();
  }
  
  
   
  


}
//end of file
