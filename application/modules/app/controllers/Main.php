<!-- 
|--------------------------------------------------------------------------
| Controller Main
|--------------------------------------------------------------------------
|
| @params	user		session username login
|			password	session password login
|			generalcode	parameter input for general setting
|  
-->
<?php 
error_reporting(1); 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();		
		// $this->load->library('Session');
		// $this->load->model('Muser');
		$this->load->model('Modul_setting');
		// $this->load->model('Mmenu');
		 $this->load->model('Modul_login');
		// $this->load->library('global_setting');
		
	}
	
	public function dashboard()
	{
		// print_r($this->session->userdata('usergroupid'));die;
		if (!$this->session->userdata('username'))
		{
			redirect(base_url());
		}
		else {
		// $sess_data['appid'] 		= 	$appid;
		// $session = $this->session->set_userdata($sess_data);
		
		$data['namakry'] = $this->session->userdata('fullname');
		// print_r($this->session->userdata('fullname'));die;
		$generalcode = "SETTING_DASHBOARD";
		$data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
		// print_r($this->Modul_login->get_listgeneralsetting($generalcode));die;
		$this->load->view('dashboard/dashboard',$data);
		}
		
	}
	public function direct()
	{
		$data['loginuser'] = $this->global_setting->get_loginuser();
		$this->load->view('login/direct',$data);
	}
}
