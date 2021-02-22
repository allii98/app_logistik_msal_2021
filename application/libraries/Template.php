<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

	protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
	function utama($content, $data = NULL){
	    $data['headernya'] = $this->_ci->load->view('template/Header', $data, TRUE);
	    $data['leftsidenya'] = $this->_ci->load->view('template/Leftside', $data, TRUE);
	    $data['contentnya'] = $this->_ci->load->view($content, $data, TRUE);
	    $data['footernya'] = $this->_ci->load->view('template/Footer', $data, TRUE);
	    
	    $this->_ci->load->view('template/Index', $data);
	}
}
