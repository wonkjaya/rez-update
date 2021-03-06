<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	 {
		parent::__construct();
		$this->load->helper(array('url','html','adm'));
		$this->load->model('m_admin','m');
	 }
	 
	function setuser($user){
		$this->load->library('session');
		$this->session->set_userdata("username",$user);
	}
	 
	function userdata(){
		$this->load->library('session');
		$user=$this->session->userdata("username");
		//if ($user == ""){$this->login();return;}
		return $user;
	}
	
	function encode($str){
		$this->load->library('encrypt');
		return $this->encrypt->encode($str);
	}
	
	function decode($str){
		$this->load->library('encrypt');
		return $this->encrypt->decode($str);
	}
	
	function post($str){
		return $this->input->post($str);
	}
	
	function get($str){
		return $this->input->get($str);
	}
#-------------------------------------------------------------------------
	 
	function header($data){
		$this->load->view("main/admin/header",$data);
	}
	 
	function leftside(){
		$data['categories']=$this->m->select_categories();
		$this->load->view("main/admin/sidebar",$data);
	}
	 
	function view($filename,$data=''){
		$this->load->view($filename,$data);
	 }
	 
	function body($data=''){
		$this->load->view('body',$data);
	 }
	 
	function redirecting($user=''){
		if($user == '') echo 'a';//redirect('admin/login');
		else
		$this->setuser($user);
		redirect('admin/home');
	}
	 
	 
#------------------------------------------------------------------------
	
	function index(){
		$this->products();
	}
	
	function login(){
		if($this->userdata() != ''){
		 redirect('admin/home');
		}
		
		$data=array();
		if($_POST){
			$data['err']='username atau password salah!';

			$user=$this->post('username');
			$pass=$this->post('password');
			$capt=$this->post('captcha');
			$password=$this->decode($this->m->select_pass($user));
			if($password == $pass and $capt="masuk")
				$this->redirecting($user);
		}
		$this->view('main/login/login',$data);
		
	}
	
	function home(){
		$this->userdata();
		$data['title']='Home';
		$data['content']='home_content';
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
		function home_content($file='home_content'){
			$data=array();
			$this->view($file,$data);
		}
	
	function products(){
		$this->userdata();
		$data['title']='Home';
		$data['content']='product_content';
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
		function product_content(){
			$data=array();
			$data['product']=$this->m->view_product();
			$this->view('product_content',$data);
		}
	
	function productdetail($id){
		$this->userdata();
		$data['title']='Produk Detail';
		$data['content']='product_detail';
		$data['param']=array('products.idproduct'=>$id);
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
		function product_detail($param){
			$data=array();
			$data['product']=$this->m->view_product_where($param,'detail');
			$this->view('product_detail',$data);
		}
	
	function new_product(){
		if($_POST){
		 
		}
		$this->load->helper('form');
		$this->userdata();
		$data['title']='Produk Baru';
		$data['content']='product_new';
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
		function product_new(){
			$data['act']='new';
			$data['ctg']=$this->m->select_all_categories();
			$data['fw']=$this->m->select_all_frameworks();
			$data['lcc']=$this->m->select_all_licence();
			$this->view('product_form',$data);
		}
	
	function contactus(){
	
	}
	
}
