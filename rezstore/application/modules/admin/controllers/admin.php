<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
 public $username;
	function __construct()
	 {
		parent::__construct();
		$this->load->helper(array('url','html','contenturl'));
		$this->load->model('m_admin','m');
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
	
	function index(){
		$this->home();
	}
	
	function home(){
		$data['title']='Home';
		$data['content']='home_content';
		$data['control']=$this;
		$this->header($data);
		$this->body($data);
	}
		function home_content(){
			$this->view('home_content',$data);
		}
	
	function product(){
	
	}
	
	function contactus(){
	
	}
	
}