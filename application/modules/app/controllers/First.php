<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
    }
	/**
	 * Contoh penggunaan bootstrap pada codeigniter::index()
	 */
	public function index()
	{
			// if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') )
			// {
				// $browser = 'Mozilla Firefox';
			// }
			// else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') )
			// {
				// $browser = 'Chrome';
			// }
			// else
			// {
				// $browser = 'Other';
			// }
			// //echo $browser;
		// if ($browser == 'Mozilla Firefox'){
			// $this->load->view('login/login_viewcn');
			// //$this->load->view('login_view');
			// }
		// else{
			// $this->load->view('login/login_viewcn');
		// }
		$this->load->view('login/login_viewcn');
		
	}
	
}