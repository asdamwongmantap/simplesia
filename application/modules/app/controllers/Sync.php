<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Sync extends CI_Controller {

public function __construct(){
		parent::__construct();
		//$this->load->library('bussanldap');
		$this->load->library('Session');
		// $this->load->model('Mlogin');
		// $this->load->model('Msetting');
    }

public function Cek_logincn() 
	{
	$data1 = array('username' => $this->input->post('user', TRUE),
					'passwd' => md5($this->input->post('password', TRUE))
		);
	$this->load->model('modul_login'); // load model_user
	
	$hasil = $this->modul_login->cek_user($data1);
	// print_r($hasil);die;
	if ($hasil->num_rows() == 1) {
		foreach ($hasil->result() as $sess) {
			
			$sess_data['logged_in'] = 'Sudah Login';
			$sess_data['remember_me'] = $this->input->post('remember_me');
			$sess_data['username'] = $sess->username;
			$sess_data['password'] = $sess->passwd;
			$sess_data['fullname'] = $sess->fullname;
			$sess_data['usergroupid'] = $sess->usergroupid;
			$this->session->set_userdata($sess_data);
			// print_r($this->session->userdata('usergroupid'));
		}
		
		//redirect('../home/dashboard');
	if ($this->session->userdata('usergroupid')=='1') {
		$this->session->set_userdata($sess_data);
			redirect('app/main/dashboard');
		}
	else{
		redirect('app/Mmin/dashboard1');
		}
	}
	else {
		echo "<script>alert('Username / Password yang anda gunakan salah !');
		window.history.go(-1);</script>";
		
		// redirect('../'); 
	}
		
		
	}

		
}
?>
