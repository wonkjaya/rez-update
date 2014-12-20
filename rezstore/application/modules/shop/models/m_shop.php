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
					products.code,
					products.productname,
					products.productimage,
					productdetail.detail
				');
		$this->db->from('products');
		$this->db->join('productdetail', 'productdetail.idproduct = products.idproduct','left');
		$this->db->join('frameworks', 'productdetail.idframework = frameworks.idframework','left');
		$this->db->limit(2,3);
		return $this->db->get()->result();
	  }
  
  function select_content($content=''){
	$this->db->where($content);
	return $this->db->get('pages')->result();
  }
  
  function select_categories(){
	$this->db->where(array('status'=>1));
	return $this->db->get('categories')->result();
  }
  
	  function select_category_products($param=''){
		$this->db->select('
					products.idproduct,
					products.price,
					frameworks.frameworkname,
					products.code,
					products.productname,
					products.productimage,
					productdetail.detail
				');
		$this->db->from('products');
		$this->db->join('productdetail', 'productdetail.idproduct = products.idproduct','left');
		$this->db->join('frameworks', 'productdetail.idframework = frameworks.idframework','left');
		$this->db->limit(6);
		$this->db->where($param);
		return $this->db->get()->result();
	  }
   
  


}
//end of file
