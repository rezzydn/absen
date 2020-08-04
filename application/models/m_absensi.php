<?php 
 
class M_absensi extends CI_Model {

  
	function tampil_data(){
    return $this->db->get('absensi');
    }

    function absen_masuk(){
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'tgl_absen_masuk' => mdate('%Y-%m-%d %H:%i:%s', now())
        );

        $this->db->set($data);
        $this->db->insert('absen', $data);
        redirect('../absensi/karyawan');
    }

    function absen_pulang($id_absen){
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'tgl_absen_keluar' => mdate('%Y-%m-%d %H:%i:%s', now())
        );
        
        $this->db->update('absen', $data, array('tgl_absen_keluar' => $id_absen));
        redirect('../absensi/karyawan');
    }
}