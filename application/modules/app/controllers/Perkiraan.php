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
		$explodejenisakun = explode(":",$this->input->post('kd_jenisakun'));
		$kdjenisakun = $explodejenisakun[0];
		if (!$this->input->post('tgl_awal')){
			$tglawal = Date("Y-m-d");
		}else{
			$tglawal = $this->input->post('tgl_awal');
		}
		$data = array(
				  'kd_akun' =>$this->input->post('kd_akun'),
				  'desc_akun' =>$this->input->post('desc_akun'),
				  'kd_jenisakun' =>$kdjenisakun
				  );
		$data2 = array(
				  'kd_akun' =>$this->input->post('kd_akun'),
				  'tgl_awal' =>$tglawal,
				  'posisi' =>$this->input->post('posisi'),
				  'saldo_awal_debet' =>$this->input->post('saldo_awal_debet'),
				  'saldo_awal_kredit' =>$this->input->post('saldo_awal_kredit')
				  );
		if($this->form_validation->run()!=FALSE){
                //pesan yang muncul jika berhasil diupload pada session flashdata
				$this->Modul_rekening->get_insertrek($data); //akses model untuk menyimpan ke database
                $this->Modul_rekening->get_insertrek2($data2);
				echo "berhasil";
			}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                echo "error";
	}         
    }
	
	public function editrek($id)
	{
		
		if (!$this->session->userdata('username')){
			redirect(base_url());
        }else{
            $generalcode = "SETTING_DASHBOARD";
		    $data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
			$data['dataeditrekening']=$this->Modul_rekening->get_editrek($id);
			$data['datajenisrekeningddl']=$this->Modul_jenisrek->viewjenisrek();
			$data['dataposisiddl']=$this->Modul_jenisrek->viewposisi();
			// print_r($this->Modul_rekening->viewrek());die;
            $this->load->view('setup/data/editperkiraan',$data);
		}
		
	}
	function proseseditrek() { 
		$this->form_validation->set_rules('kd_akun','Kode Rekening / Akun','required');
		$this->form_validation->set_rules('desc_akun','Deskripsi Rekening / Akun','required');
		$this->form_validation->set_rules('kd_jenisakun','Deskripsi Jenis Akun','required');
		$explodejenisakun = explode(":",$this->input->post('kd_jenisakun'));
		$kdjenisakun = $explodejenisakun[0];
		if (!$this->input->post('tgl_awal')){
			$tglawal = Date("Y-m-d");
		}else{
			$tglawal = $this->input->post('tgl_awal');
		}
		$id = $this->input->post('kd_akun'); 
		$data = array(
					'kd_akun' =>$this->input->post('kd_akun'),
					'desc_akun' =>$this->input->post('desc_akun'),
					'kd_jenisakun' =>$kdjenisakun
					);
		$data2 = array(
					'kd_akun' =>$this->input->post('kd_akun'),
					'tgl_awal' =>$tglawal,
					'posisi' =>$this->input->post('posisi'),
					'saldo_awal_debet' =>$this->input->post('saldo_awal_debet'),
					'saldo_awal_kredit' =>$this->input->post('saldo_awal_kredit'));
		if($this->form_validation->run()!=FALSE){
                //pesan yang muncul jika berhasil diupload pada session flashdata
			$this->Modul_rekening->moduleditrek($data,$id); 
			$this->Modul_rekening->moduleditrek2($data2,$id); 
            echo "berhasil";
			}else{
				echo "error";
			}
        }
	public function hapusrek($id)
	{
	    
		$data['username'] = $this->session->userdata('username');
		$id = $this->input->get("kdakun");
		$data['data']=$this->Modul_rekening->hapus_rek($id);
		$data['data']=$this->Modul_rekening->hapus_rek2($id);
		if ($res <= 1) {
            	echo "berhasil";
            }
		
	}
	public function detailrek($id)
	{
		
		if (!$this->session->userdata('username')){
			redirect(base_url());
        }else{
            $generalcode = "SETTING_DASHBOARD";
		    $data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
			$data['dataeditrekening']=$this->Modul_rekening->get_editrek($id);
			$data['datajenisrekeningddl']=$this->Modul_jenisrek->viewjenisrek();
			$data['dataposisiddl']=$this->Modul_jenisrek->viewposisi();
			// print_r($this->Modul_rekening->viewrek());die;
            $this->load->view('setup/data/detailperkiraan',$data);
		}
		
	}
	
}

# nama file home.php
# folder apllication/controller/