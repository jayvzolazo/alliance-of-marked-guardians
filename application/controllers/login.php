<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('mod_login');
	}
	
	public function index(){
		if($this->is_logged_in()) redirect(site_url('page/dashboard'));
		
		$pagedata = $this->_page_defaults('Login', 'login', '');
		
		$pagedata['site_name'] = $this->site_name();
		
		if ($this->form_validation->run('login') == FALSE) {
			$pagedata['response'] = validation_errors('<div class="callout callout-danger">', '</div>');
		}
		else{
			$param = $this->input->post();
			
			if($param['username'] && $param['password']){
				$param['password'] = $this->encrypt->sha1(trim($param['password']));
				
				$validate = $this->mod_login->validate($param);
				
				if($validate){
					$this->auth($param);
					
					redirect(site_url('page/dashboard'));
				} // login validation
			} // param validation
		} // form validation
		
		$this->load->view('pages/login', $pagedata);
	}
	
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		
		redirect(site_url());
	}
}