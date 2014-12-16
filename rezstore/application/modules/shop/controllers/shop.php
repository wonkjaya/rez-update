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
		$data['meta']=$this->m->select_meta(array('idmeta'=>1)); // 1 => lihat readme.txt
		$data['content']='home_content';
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
		function home_content(){
			$data['home_content']=$this->m->select_content('home');
			$data['home_products']=$this->m->select_home_products();
			$this->view('home_content',$data);
		}
	
	function category($id=''){
		$data['title']='Category';
		$data['meta']=$this->m->select_meta(array('idmeta'=>2,'sub'=>$id)); // 1 => lihat readme.txt
		$data['content']='category_content';
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
	
		function category_content(){
		 for($a=1;$a<=4;$a++){
			$contents[]=array('metatitle'=>'title_content'.$a,
					'metaimage'=>'image.png'.$a,
					'metacontent'=>'content'.$a);
			}
			$a=array('categories'=>$contents);
			print_r(json_encode($a));
		}
	
}
