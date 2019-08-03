<?php 
	Class Modul_login extends CI_Model {

		Function cek_user($data1) {
			$this->load->database();
			$query = $this->db->get_where('user', $data1);
			return $query;
		}
		function modulubahpass() { 
		
			$id = $this->input->post('username'); 
			$data = array(
				  'passwd' =>md5($this->input->post('passwd'))
				  );
				$this->db->where('username',$id); 
            $this->db->update('user',$data); 
		}
		Function get_listgeneralsetting($generalcode)
		{
			// $this->load->database();
			$query=$this->db->get_where('tbl_generalsetting', array('gs_code' => $generalcode));
			if ($query->num_rows()>0)
			{
				return $query->result();
			}
				else
			{
				return array();
			}
		}
		
}