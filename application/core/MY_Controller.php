<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    protected $_user;

    public function __construct(){
        parent::__construct();
    }

    function templateLoader($contentdata){
        $script = array_pop(array_reverse($contentdata));

        $navbardata['title'] = $this->site_name();
		
		$templatedata['site_title'] = $this->site_name();
        $templatedata['scripts'] = (!is_null($script))? $this->page_script($script) : '';
        $templatedata['styles'] = $this->page_css($contentdata['styles']);
        $templatedata['header_elements'] = $this->header_elements();
        $templatedata['breadcrumbs'] = $this->load->view('partials/breadcrumbs', NULL, TRUE);
        $templatedata['navbar'] = $this->load->view('partials/navbar', $navbardata, TRUE);
        $templatedata['sidebar'] = $this->load->view('partials/sidebar', NULL, TRUE);
        $templatedata['setting_container'] = $this->load->view('partials/setting_container', NULL, TRUE);
        $templatedata['content'] = $this->load->view('template/content', $contentdata, TRUE);

        $this->load->view('template/main', $templatedata);
    }

    function _page_defaults($page_title, $page, $sub_page = '', $modal = NULL){
        $pagedata['page_title'] = $page_title;
        $pagedata['page'] = $page;
        $pagedata['sub_page'] = $sub_page;
        $pagedata['user'] = $this->_user;
		//$pagedata['global_modal'] = $this->load->view('template/modals', NULL, TRUE);

        if(!is_null($modal))
            $pagedata['modal'] = $this->load->view('template/modals/'.$modal, NULL, TRUE);

        return $pagedata;
    }

    private function header_elements(){
        $elems = "<link href='".base_url('assets/css/template.css')."' rel='stylesheet' />";
		$elems.= "<link href='".base_url('assets/css/bootstrap.css')."' rel='stylesheet' />";
		$elems.= "<link href='".base_url('assets/css/font-awesome.css')."' rel='stylesheet'>";
		$elems.= "<!--[if lte IE 8]><link href='".base_url('assets/css/ace-ie.min.css')."' rel='stylesheet' /><![endif]-->";
		
		$elems.= "<link href='".base_url('assets/css/ace.min.css')."' rel='stylesheet'/>";
		$elems.= "<link href='".base_url('assets/css/ace-rtl.min.css')."' rel='stylesheet'/>";
		$elems.= "<link href='".base_url('assets/css/ace-skins.min.css')."' rel='stylesheet'/>";
		
		$elems.= "<script src='".base_url('assets/js/jquery-1.10.2.js')."' type='text/javascript'></script>";
		$elems.= "<script src='".base_url('assets/js/bootstrap.js')."' type='text/javascript'></script>";
		$elems.= "<script src='".base_url('assets/js/ace.js')."' type='text/javascript'></script>";
		$elems.= "<script src='".base_url('assets/js/ace-extra.min.js')."' type='text/javascript'></script>";
		
		$elems.= "<!--[if lt IE 9]><script src='".base_url('assets/js/html5shiv.js')."'' type='text/javascript'></script><script src='".base_url('assets/js/respond.min.js')."'' type='text/javascript'></script><![endif]-->";

        return $elems;
    }

    private function page_script($script){
        $count = count($script);
        $scripts = '';

        for($i = 0; $i < $count; ++$i){
            if($script[$i] != ""){
                $scripts.= "<script type='text/javascript' src='".base_url('assets/js/page/'.$script[$i].'js')."'></script>\n\t";
            }
        }

        return $scripts;
    }

    private function page_css($css){
        $count = count($css);
        $style = '';

        for($i = 0; $i < $count; ++$i){
            if($css[$i] != ""){
                $style.= "<link rel='stylesheet' href='".base_url('assets/css/page/'.$css[$i].'.css')."' />\n\t";
            }
        }

        return $style;
    }

    function site_name(){
        $title = $this->config->item('sitename');
        return $title;
    }

    function paginate($url, $total_rows, $per_page){
        $this->load->library('pagination');

        $config['base_url'] = $url;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['full_tag_open'] = '<ul>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['full_tag_close'] = '</u>';

        $this->pagination->initialize($config); 

        return $this->pagination->create_links();
    }
	
	function _validate_email($email){
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
		
		if(preg_match($regex, $email)){
			return TRUE;
		}
		
		return FALSE;
	}
}
