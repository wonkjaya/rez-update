<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {
 public $username;
	function __construct()
	 {
		parent::__construct();
		$this->load->helper(array('url','html','contenturl'));
		$this->load->model('m_shop','m');
	 }
	 
	function get_sess(){
		$user=$this->session->userdata("username");
		if ($user=="")redirect(site());
		return $user;
	}
	
	function post($str){
		return $this->input->post($str);
	}
	
	function get($str){
		return $this->input->get($str);
	}
	 
	function header($data){
		$this->load->view("main/header",$data);
	}
	 
	function leftside(){
		$data['categories']=$this->m->select_categories();
		$this->load->view("main/sidebar",$data);
	}
	 
	function view($filename,$data=''){
		$this->load->view($filename,$data);
	 }
	 
	function body($data=''){
		$this->load->view('body',$data);
	 }
	
	function index(){
		$this->home();
	}
	
	function home(){
		$data['title']='Home';
		$data['meta']=$this->m->select_meta('pages',array('pages.name'=>'home')); // 1 => lihat readme.txt
		$data['content']='home_content';
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
		function home_content(){
			$data['home_content']=$this->m->select_content(array('name'=>'home'));
			$data['home_products']=$this->m->select_home_products();
			$this->view('home_content',$data);
		}
	
	function category($id=2){
		$data['title']='Category';
		$data['meta']=$this->m->select_meta('categories',array('idcategory'=>$id)); // 1 => lihat readme.txt
		$data['content']='category_content/'.$id;
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
	
		function category_content($id=2){
		 	$data['category_content']=$this->m->select_content(array('idcategory'=>$id));
			$data['category_products']=$this->m->select_category_products(array('products.idcategory'=>$id));
			$this->view('category_content',$data);
		}
	
	function detailproduct($id='',$param=''){
		$data['title']='Product';
		$data['meta']=$this->m->select_meta('products',array('idproduct'=>$id)); // 1 => lihat readme.txt
		$data['content']='productdetail_content/'.$id;
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
	
		function productdetail_content($id=0){
		 	$data['productdetail_content']=$this->m->select_productdetail(array('products.idproduct'=>$id));
			$this->view('productdetail_content',$data);
		}
	
	function product($offside=0){
		$data['title']='Product';
		$data['meta']=$this->m->select_meta('products',array('idproduct'=>20)); // 20 => lihat readme.txt
		$data['content']='product_content/'.$offside;
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
	
		function product_content($offside=0){
		 	$data['product_content']=$this->m->select_products($offside);
			$this->view('product_content',$data);
		}
	
}
