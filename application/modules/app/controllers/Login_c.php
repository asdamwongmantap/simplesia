<?php
error_reporting(0); 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->library('global_setting');
	}
	public function logout() {
		// $logout = $this->global_setting->get_settingdashboard();
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect(base_url());
	}
	public function logoutcn() {
		$logout = $this->global_setting->get_settingdashboard();
		redirect(base_url());
	}
	
}
