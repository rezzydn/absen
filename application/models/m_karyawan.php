<?php 
 
class M_karyawan extends CI_Model {

	function tampil_data(){
		$this->db->order_by('id_absen', 'ASC');
		return $this->db->from('absen')
			->join('karyawan', 'karyawan.id_kry=absen.karyawan_id')
			->get()
			->result();
		
    }
}