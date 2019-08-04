<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Jenis_rek extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper(array('url','form')); //load helper url 
        $this->load->library('form_validation'); //load form validation
        $this->load->model('Modul_jenisrek');
        $this->load->model('Modul_setting');
    }
	
	public function jenisakun()
	{
        if (!$this->session->userdata('username')){
			redirect(base_url());
        }else{
            $generalcode = "SETTING_DASHBOARD";
		    $data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
            $data['datajenisrekening']=$this->Modul_jenisrek->viewjenisrek();
            $this->load->view('setup/data/listdatajenisrek',$data);
        }
		
	}
	public function add_jnsrek()
	{
        if (!$this->session->userdata('username')){
			redirect(base_url());
        }else{
            $generalcode = "SETTING_DASHBOARD";
		    $data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
            $data['data']=$this->Modul_jenisrek->viewjenisrek();
            $this->load->view('setup/data/addjenisrek',$data);
        }

	}
	public function savejnsrek(){
		$this->form_validation->set_rules('kd_jenisakun','Kode Jenis Akun','required');
		$this->form_validation->set_rules('desc_jenisakun','Deskripsi Jenis Akun','required');
		$data = array(
				  'kd_jenisakun' =>$this->input->post('kd_jenisakun'),
				  'desc_jenisakun' =>$this->input->post('desc_jenisakun')
                  );
        // print_r($data);die;
		if($this->form_validation->run()!=FALSE){
                //pesan yang muncul jika berhasil diupload pada session flashdata
				$this->Modul_jenisrek->get_insertjnsrek($data); //akses model untuk menyimpan ke database
                echo "berhasil";
			}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                echo "error";
            }       
            // print_r($this->Modul_jenisrek->get_insertjnsrek($data));die;  
    }
	public function editjenis($id)
	{
		
		if (!$this->session->userdata('username')){
			redirect(base_url());
        }else{
            $generalcode = "SETTING_DASHBOARD";
		    $data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
			$data['dataeditjenis']=$this->Modul_jenisrek->get_editjnsrek($id);
			// print_r($this->Modul_jenisrek->get_editjnsrek($id));die;
            $this->load->view('setup/data/editjenisrek',$data);
        }

	}
	function saveeditjnsrek() { 
		$this->form_validation->set_rules('kd_jenisakun','Kode Jenis Akun','required');
		$this->form_validation->set_rules('desc_jenisakun','Deskripsi Jenis Akun','required');
		if($this->form_validation->run()!=FALSE){
            $this->Modul_jenisrek->moduleditjnsrek(); 
             echo "berhasil";
			}else{
				echo "error";
			}
        }
	public function hapusjenis($id)
	{
	    
		$data['username'] = $this->session->userdata('username');
		$id = $this->input->get("kdjenisrek");
		$data['data']=$this->Modul_jenisrek->hapus_jnsrek($id);
		if ($res <= 1) {
            	 echo "berhasil";
            }
		
	}
	
}

# nama file home.php
# folder apllication/controller/