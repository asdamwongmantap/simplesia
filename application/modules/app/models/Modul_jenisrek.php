<?php 
	Class Modul_jenisrek extends CI_Model {
		
	var $tbl_jenisakun='tbl_jenisakun';
	
	Function viewjenisrek()
	{
		// $this->load->database();
		$query=$this->db->get('tbl_jenisakun');
		If ($query->num_rows()>0)
	{
		Return $query->result();
	}
		Else
	{
		Return array();
	}
	}
	Function get_insertjnsrek($data){
		// $this->load->database();
       $this->db->insert($this->tbl_jenisakun, $data);
       return TRUE;
    }
	Function get_editjnsrek($id)
	{
		 $this->db->where('kd_jenisakun',$id); 
         $query = $this->db->get('tbl_jenisakun'); 
                If ($query->num_rows()>0)
	{
		Return $query->result();
	}
		Else
	{
		Return null;
	} 
	}
	Function moduleditjnsrek() { 
		
		$id = $this->input->post('kd_jenisakun'); 
		$data = array(
				  'kd_jenisakun' =>$this->input->post('kd_jenisakun'),
				  'desc_jenisakun' =>$this->input->post('desc_jenisakun')
				  );
		$this->db->where('kd_jenisakun',$id); 
        $this->db->update('tbl_jenisakun',$data); 
	}
	public function hapus_jnsrek($id){ 
			
			$this->db->where('kd_jenisakun',$id);
			$query = $this->db->get('tbl_jenisakun');
			$row = $query->row();
			$this->db->delete('tbl_jenisakun', array('kd_jenisakun' => $id));

		}
	
	
}