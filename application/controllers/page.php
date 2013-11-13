<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MY_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$pagedata = $this->_page_defaults('', '', '');

		$contentdata['script'] = NULL;
		$contentdata['styles'] = NULL;
		$contentdata['page'] = $this->load->view('pages/home', $pagedata, TRUE);
		
		$this->templateLoader($contentdata);
	}
}