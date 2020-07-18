<?php 
 
class M_absensi extends CI_Model {

  
	function tampil_data(){
    return $this->db->get('absensi');
    }

    public function hitungabsen()
    {
        $this->db->select_sum('id');
        $query = $this->db->get('absen');
        if($query->num_rows()>0)
        {
            return $query->row()->id;
        }
        else
        {
            return 0;
        }
    }

    function absenjoin($id){
		$this->db->select();
		$this->db->from('karyawan as kry');
		$this->db->join('absen as abs', 'abs.karyawan_id = kry.id');
		$this->db->where('b.id',$id);
		$result= $this->db->get();
		return $result;
    }
    
    
    function tambah_data(){
        $data = array(
					'tgl_absen_masuk' => $this->input->post('tgl_absen_masuk'),
					'tgl_absen_keluar' => $this->input->post('tgl_absen_keluar')
			);
		$this->db->insert('absensi',$data);
		redirect('../absensi');
    }
}