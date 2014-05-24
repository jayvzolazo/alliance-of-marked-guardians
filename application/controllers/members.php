<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends MY_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	public function add_member(){
		$pagedata = $this->_page_defaults('New Member', 'new member', '');

		$contentdata['script'] = array(
			'plugins/input-mask/jquery.inputmask.js',
			'plugins/input-mask/jquery.inputmask.date.extensions.js',
			'page/add-children.js',
			'page/jasny-bootstrap.min.js',
		);
		
		$contentdata['styles'] = array(
			'page/jasny-bootstrap.min.css',
		);
		$contentdata['page'] = $this->load->view('pages/add_members', $pagedata, TRUE);
		
		$this->templateLoader($contentdata);
	}
}