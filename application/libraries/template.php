<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');
class Template
{
	var $tempalate_data =array();
	
	function set($nama, $value)
	{
		$this->template_data[$data] = $value;	
	}

	function view($view ='', $view_data = array(),$retrurn = false)
	{
		$this->CI =& get_instance();
		$this->set('content', $this->CI->load->view($view,$view_data,true));
		return $this->CI->load->view('layout',$this->template_data, $return);
	}
}
?>