<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(1);
class Perkiraan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper(array('url','form')); //load helper url 
        $this->load->library('form_validation'); //load form validation
        $this->load->model('Modul_jenisrek');
		$this->load->model('Modul_setting');
		$this->load->model('Modul_rekening');
    }
	
	
	public function rekening()
	{
		if (!$this->session->userdata('username')){
			redirect(base_url());
        }else{
            $generalcode = "SETTING_DASHBOARD";
		    $data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
			$data['datarekening']=$this->Modul_rekening->viewrek();
			// print_r($this->Modul_rekening->viewrek());die;
            $this->load->view('setup/data/listdataperkiraan',$data);
        }
	}
	public function add_rek()
	{
		if (!$this->session->userdata('username')){
			redirect(base_url());
        }else{
            $generalcode = "SETTING_DASHBOARD";
		    $data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
			$data['datarekening']=$this->Modul_rekening->viewrek();
			$data['datajenisrekeningddl']=$this->Modul_jenisrek->viewjenisrek();
			$data['dataposisiddl']=$this->Modul_jenisrek->viewposisi();
			// print_r($this->Modul_rekening->viewrek());die;
            $this->load->view('setup/data/addperkiraan',$data);
        }
	}
	public function saverek(){
		$this->form_validation->set_rules('kd_akun','Kode Rekening / Akun','required');
		$this->form_validation->set_rules('desc_akun','Deskripsi Rekening / Akun','required');
		$this->form_validation->set_rules('kd_jenisakun','Deskripsi Jenis Akun','required');
		$data = array(
				  'kd_akun' =>$this->input->post('kd_akun'),
				  'desc_akun' =>$this->input->post('desc_akun'),
				  'kd_jenisakun' =>$this->input->post('kd_jenisakun')
				  );
		$data2 = array(
				  'kd_akun' =>$this->input->post('kd_akun'),
				  'tgl_awal' =>$this->input->post('tgl_awal'),
				  'posisi' =>$this->input->post('posisi'),
				  'saldo_awal_debet' =>$this->input->post('saldo_awal_debet'),
				  'saldo_awal_kredit' =>$this->input->post('saldo_awal_kredit')
				  );
		if($this->form_validation->run()!=FALSE){
                //pesan yang muncul jika berhasil diupload pada session flashdata
				$this->load->model('modul_rekening');
				$this->modul_rekening->get_insertrek($data); //akses model untuk menyimpan ke database
                $this->modul_rekening->get_insertrek2($data2);
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data " .$this->input->post('desc_akun'). " Berhasil Disimpan!!</div></div>");
                redirect('rek/rekening'); //jika berhasil maka akan ditampilkan view jenisrekening
			}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\"><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data " .$this->input->post('desc_akun'). " Gagal Disimpan!!</div></div>");
                redirect('rek/add_rek'); //jika gagal maka akan ditampilkan form tambah mk
	}         
    }
	
	public function editrek($id)
	{
		if ($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata('logged_in');
		$data['username'] = $this->session->userdata('username');
		$this->load ->model('modul_rekening');
		$data['data']=$this->modul_rekening->get_editrek($id);
		$this->load->view('admin/rek/edit_rekening',$data);
		}
		else {
			redirect('');
		}
	}
	function proseseditrek() { 
		$this->form_validation->set_rules('kd_akun','Kode Rekening / Akun','required');
		$this->form_validation->set_rules('desc_akun','Deskripsi Rekening / Akun','required');
		$this->form_validation->set_rules('kd_jenisakun','Deskripsi Jenis Akun','required');
		if($this->form_validation->run()!=FALSE){
                //pesan yang muncul jika berhasil diupload pada session flashdata
		$this->load->model('modul_rekening','',TRUE); 
            $this->modul_rekening->moduleditrek(); 
			$this->modul_rekening->moduleditrek2(); 
             $this->session->set_flashdata('pesan','
			 	<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Di Update
				</div>
			 	');
				redirect('rek/rekening'); //jika berhasil maka akan ditampilkan view matakuliah
			}else{
               $this->session->set_flashdata('pesan','
			 	<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Di Update
				</div>
			 	');
				redirect('rek/rekening'); //jika berhasil maka akan ditampilkan view matakuliah
			}
        }
	public function hapusrek($id)
	{
	    
		$data['username'] = $this->session->userdata('username');
		$this->load ->model('modul_rekening','', TRUE);
		$data['data']=$this->modul_rekening->hapus_rek($id);
		$data['data']=$this->modul_rekening->hapus_rek2($id);
		if ($res <= 1) {
            	 $this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Di Hapus
				</div>

            	 	');
            	 redirect('rek/rekening');
            }
		$this->load->view('admin/rek/list_rekening', $data);
	}
	
}

# nama file home.php
# folder apllication/controller/