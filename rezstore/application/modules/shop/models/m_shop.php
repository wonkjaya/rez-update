<?php
class M_shop extends CI_Model
{
  function escape($str){
   return $this->db->escape($str);
  }
  
  function select_meta($param=''){
	$this->db->where($param);
	return $this->db->get('metas')->row();
  }
  
  function select_home_products(){
	$this->db->select('
						products.idproduct,
						products.price,
						frameworks.frameworkname,
						products.code
					');
	$this->db->from('products');
	$this->db->join('productdetail', 'productdetail.id = products.idproduct','left');
	$this->db->join('frameworks', 'productdetail.frameworks_idframework = frameworks.idframework','left');
	$this->db->limit(2);
	return $this->db->get()->result();
  }
  
  function select_content($content=''){
	$this->db->where(array('name'=>$content));
	return $this->db->get('pages')->result();
  }
  
  function select_categories(){
	$this->db->where(array('status'=>1));
	return $this->db->get('categories')->result();
  }
   
  


}
//end of file