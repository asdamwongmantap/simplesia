<?php 
	Class Modul_setting extends CI_Model {

		
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