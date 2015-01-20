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
  
  function view_product_where($param,$type){
  	$this->db->where($param);
  	$this->db->join('productdetail','productdetail.idproduct=products.idproduct','left');
  	if($type=='detail'){
  	 $this->db->join('frameworks','frameworks.idframework=productdetail.idframework','left');
  	 $this->db->join('licence','licence.idlicence=productdetail.idlicence','left');
  	 $this->db->join('categories','products.idcategory=categories.idcategory','left');
  	}
  	return $this->db->get('products')->result();
  }
  
  function select_all_categories(){
  	return $this->db->get('categories')->result();
  }
  
  function select_all_frameworks(){
  	return $this->db->get('frameworks')->result();
  }
  
  function select_all_licence(){
  	return $this->db->get('licence')->result();
  }
   
  


}
//end of file
