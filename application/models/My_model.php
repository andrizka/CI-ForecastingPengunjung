<?php
class My_model extends CI_Model{
	public function tampildata($nama_table,$urut_id){
		return $this->db->from($nama_table)
						->order_by($urut_id, 'ASC')
						->get('');
	}
	public function simpandata($nama_table,$data){
		return $this->db->insert($nama_table,$data);
	}
	public function hapusdata($nama_table,$id,$idkey){
		return $this->db->delete($nama_table,array($idkey=>$id));
	}
	public function tampilwhere($fakultas){
		return $this->db->query("SELECT * FROM perpus WHERE fakultas='$fakultas' ORDER BY id ASC");
	}
	public function totaldata($tgl_awal,$tgl_akhir,$progdi){
		$query = $this->db->query("SELECT * FROM pengunjung WHERE tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir' AND mid(nim,5,2)='$progdi'");
		return $query;
	}

	//Cahrt
	public function getChart(){
		return $this->db->query("SELECT bulan,jumlah FROM perpus LIMIT 12");
	}
}