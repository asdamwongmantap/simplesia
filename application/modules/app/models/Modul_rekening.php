<?php 
	Class Modul_rekening extends CI_Model {
		var $tbl_akun='tbl_akun';
		var $tbl_kira='tbl_perkiraan';
		var $view_kira='view_perkiraan';
		
		Function viewrek()
		{
			$query=$this->db->get('view_perkiraan');
			if ($query->num_rows()>0)
		{
			return $query->result();
		}
			else
		{
			return array();
		}
		}
		Function get_insertrek($data){
		   $this->db->insert($this->tbl_akun, $data);
		   return TRUE;
		}
		Function get_insertrek2($data2){
		   $this->db->insert($this->tbl_kira, $data2);
		   return TRUE;
		}
		Function get_editrek($id)
		{
			 $this->db->where('kd_akun',$id); 
			 $query = $this->db->get('view_perkiraan'); 
					If ($query->num_rows()>0)
		{
			return $query->result();
		}
			else
		{
			return null;
		} 
		}
		Function moduleditrek($data,$id) { 
			
			// $id = $this->input->post('kd_akun'); 
			// $data = array(
			// 		  'kd_akun' =>$this->input->post('kd_akun'),
			// 		  'desc_akun' =>$this->input->post('desc_akun'),
			// 		  'kd_jenisakun' =>$this->input->post('kd_jenisakun')
			// 		  );
			$this->db->where('kd_akun',$id); 
			$this->db->update('tbl_akun',$data); 
		}
		Function moduleditrek2($data2,$id) { 
			
			// $id = $this->input->post('kd_akun'); 
			// $data2 = array(
			// 		  'kd_akun' =>$this->input->post('kd_akun'),
			// 		  'tgl_awal' =>$this->input->post('tgl_awal'),
			// 		  'posisi' =>$this->input->post('posisi'),
			// 		  'saldo_awal_debet' =>$this->input->post('saldo_awal_debet'),
			// 		  'saldo_awal_kredit' =>$this->input->post('saldo_awal_kredit'));
			$this->db->where('kd_akun',$id); 
			$this->db->update('tbl_perkiraan',$data2); 
		}
		public function hapus_rek($id){ 
				
				$this->db->where('kd_akun',$id);
				$query = $this->db->get('tbl_akun');
				$row = $query->row();
				$this->db->delete('tbl_akun', array('kd_akun' => $id));
	
			}
		public function hapus_rek2($id){ 
				
				$this->db->where('kd_akun',$id);
				$query = $this->db->get('tbl_perkiraan');
				$row = $query->row();
				$this->db->delete('tbl_perkiraan', array('kd_akun' => $id));
	
			}
	}
		
