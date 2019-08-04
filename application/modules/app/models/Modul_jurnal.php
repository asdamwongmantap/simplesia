<?php 
	Class Modul_jurnal extends CI_Model {
		
	var $tbl_jurnalh='tbl_jurnalumumh';
	var $tbl_jurnald='tbl_jurnalumumd';
	var $tbl_jurnalkkh='tbl_jurnalkkh';
	var $tbl_jurnalkkd='tbl_jurnalkkd';
	var $view_jurnalumum='view_jurnalumum';
	var $view_jurnalkk='view_jurnalkk';
	
	Function viewjurnalumum()
	{
		$query=$this->db->get('view_jurnalumum');
		if ($query->num_rows()>0)
	{
		return $query->result();
	}
		else
	{
		return array();
	}
	}
	Function get_insertjurnalumum($data){
       $this->db->insert($this->tbl_jurnalh, $data);
       return TRUE;
    }
	Function get_insertjurnalumum2($data2){
       $this->db->insert($this->tbl_jurnald, $data2);
       return TRUE;
    }
	Function get_editrek($id)
	{
		 $this->db->where('kd_akun',$id); 
         $query = $this->db->get('view_perkiraan'); 
                If ($query->num_rows()>0)
	{
		Return $query->result();
	}
		Else
	{
		Return null;
	} 
	}
	Function moduleditrek() { 
		
		$id = $this->input->post('kd_akun'); 
		$data = array(
				  'kd_akun' =>$this->input->post('kd_akun'),
				  'desc_akun' =>$this->input->post('desc_akun'),
				  'kd_jenisakun' =>$this->input->post('kd_jenisakun')
				  );
		$this->db->where('kd_akun',$id); 
        $this->db->update('tbl_akun',$data); 
	}
	Function moduleditrek2() { 
		
		$id = $this->input->post('kd_akun'); 
		$data2 = array(
				  'kd_akun' =>$this->input->post('kd_akun'),
				  'tgl_awal' =>$this->input->post('tgl_awal'),
				  'posisi' =>$this->input->post('posisi'),
				  'saldo_awal_debet' =>$this->input->post('saldo_awal_debet'),
				  'saldo_awal_kredit' =>$this->input->post('saldo_awal_kredit'));
		$this->db->where('kd_akun',$id); 
        $this->db->update('tbl_perkiraan',$data2); 
	}
	public function hapus_jurnalumum($id){ 
			
			$this->db->where('no_transaksi',$id);
			$query = $this->db->get('tbl_jurnalumumh');
			$row = $query->row();
			$this->db->delete('tbl_jurnalumumh', array('no_transaksi' => $id));

		}
	public function hapus_jurnalumum2($id){ 
			
			$this->db->where('no_transaksi',$id);
			$query = $this->db->get('tbl_jurnalumumd');
			$row = $query->row();
			$this->db->delete('tbl_jurnalumumd', array('no_transaksi' => $id));

		}

		Function viewjurnalkk()
	{
		$query=$this->db->get('view_jurnalkk');
		if ($query->num_rows()>0)
	{
		return $query->result();
	}
		else
	{
		return array();
	}
	}

	Function get_insertjurnalkk($data){
		$this->db->insert($this->tbl_jurnalkkh, $data);
		return TRUE;
	 }
	 Function get_insertjurnalkk2($data2){
		$this->db->insert($this->tbl_jurnalkkd, $data2);
		return TRUE;
	 }
	 public function hapus_jurnalkk($id){ 
			
		$this->db->where('no_transaksikk',$id);
		$query = $this->db->get('tbl_jurnalkkh');
		$row = $query->row();
		$this->db->delete('tbl_jurnalkkh', array('no_transaksikk' => $id));

	}
public function hapus_jurnalkk2($id){ 
		
		$this->db->where('no_transaksikk',$id);
		$query = $this->db->get('tbl_jurnalkkd');
		$row = $query->row();
		$this->db->delete('tbl_jurnalkkd', array('no_transaksikk' => $id));

	}
	
	
}