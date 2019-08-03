<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jurnal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation'); //load form validation
        $this->load->model('Modul_jenisrek');
		$this->load->model('Modul_setting');
		$this->load->model('Modul_jurnal');
    }
	/**
	 * Cotoh penggunaan bootstrap pada codeigniter::index()
	 */
	public function umum()
	{
	

        if (!$this->session->userdata('username')){
			redirect(base_url());
        }else{
            $generalcode = "SETTING_DASHBOARD";
		    $data['setting'] = $this->Modul_setting->get_listgeneralsetting($generalcode); //untuk general setting
            $data['datajurnalumum']=$this->Modul_jurnal->viewjurnalumum();
            // print_r($this->Modul_jurnal->viewjurnalumum());die;
			$this->load->view('transaksi/jurnal/listjurnalumum',$data);
            
        }
	}
	public function add_jurnalumum()
	{
		if ($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $this->session->userdata('username');
			$this->load ->model('modul_rekening');
			$data['data']=$this->modul_rekening->viewrek();
			$this->load->view('admin/jurnal/add_jurnalumum',$data);
		}
		else {
			redirect('');
		}
	}
	public function savejurnalumum(){
		$data = array(
				  'no_transaksi' =>$this->input->post('no_transaksi'),
				  'tgl_transaksi' =>$this->input->post('tgl_transaksi'),
				  'status_post' =>$this->input->post('status_post')
				  );
		$data2 = array(
				  'no_transaksi' =>$this->input->post('no_transaksi'),
				  'kd_akun' =>$this->input->post('kd_akun'),
				  'keterangan' =>$this->input->post('keterangan'),
				  'debet' =>$this->input->post('debet'),
				  'kredit' =>$this->input->post('kredit')
				  );
		if($this->form_validation->run()==FALSE){
                //pesan yang muncul jika berhasil diupload pada session flashdata
				$this->load->model('modul_jurnal');
				$this->modul_jurnal->get_insertjurnalumum($data); //akses model untuk menyimpan ke database
                $this->modul_jurnal->get_insertjurnalumum2($data2);
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data " .$this->input->post('desc_akun'). " Berhasil Disimpan!!</div></div>");
                redirect('jurnal/umum'); //jika berhasil maka akan ditampilkan view jenisrekening
			}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\"><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data " .$this->input->post('desc_akun'). " Gagal Disimpan!!</div></div>");
                redirect('jurnal/add_jurnalumum'); //jika gagal maka akan ditampilkan form tambah mk
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
	public function hapusjurnalumum($id)
	{
	    
		$data['username'] = $this->session->userdata('username');
		$this->load ->model('modul_jurnal','', TRUE);
		$data['data']=$this->modul_jurnal->hapus_jurnalumum($id);
		$data['data']=$this->modul_jurnal->hapus_jurnalumum2($id);
		if ($res <= 1) {
            	 $this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Di Hapus
				</div>

            	 	');
            	 redirect('jurnal/umum');
            }
		$this->load->view('admin/jurnal/list_jurnalumum', $data);
	}
	
}

# nama file home.php
# folder apllication/controller/