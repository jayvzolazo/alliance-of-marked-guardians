<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MY_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$pagedata = $this->_page_defaults('Dashboard', 'dashboard', '');

		$contentdata['script'] = NULL;
		$contentdata['styles'] = NULL;
		$contentdata['page'] = $this->load->view('pages/dashboard', $pagedata, TRUE);
		
		$this->templateLoader($contentdata);
	}

    public function members(){
		$this->load->model('mod_members');
		
		$pagedata = $this->_page_defaults('Members', 'members', '');
		
		$pagedata['members'] = $this->mod_members->get();

		$contentdata['script'] = NULL;
		$contentdata['styles'] = NULL;
		$contentdata['page'] = $this->load->view('pages/members', $pagedata, TRUE);
		
		$this->templateLoader($contentdata);
    }

    public function chapters(){
		$pagedata = $this->_page_defaults('Chapters', 'chapters', '');

		$contentdata['script'] = NULL;
		$contentdata['styles'] = NULL;
		$contentdata['page'] = $this->load->view('pages/chapters', $pagedata, TRUE);
		
		$this->templateLoader($contentdata);
    }
}
