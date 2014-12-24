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
	$this->db->where(array('status'=>1,'idcategory !='=>0));
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
		$this->db->join('productdetail', 
			'productdetail.idproduct = products.idproduct','left');
		$this->db->join('frameworks', 
			'productdetail.idframework = frameworks.idframework','left');
		$this->db->limit(6);
		$this->db->where($param);
		return $this->db->get()->result();
	  }
	  
	function select_productdetail($param=''){
		$this->db->join('productdetail','products.idproduct=productdetail.idproduct','left');
		$this->db->join('lisence','lisence.idlisence=productdetail.idlisence','left');
		$this->db->join('frameworks','frameworks.idframework=productdetail.idframework','left');
		$this->db->where($param);
		$q=$this->db->get('products');
		return $q->result();
	}
	
	function select_products($offside){
		$offside=number_format($offside);
		if($offside < 0)$offside=0;
		$this->db->limit(5,$offside);
		$this->db->get('products');
	}
   
  


}
//end of file
