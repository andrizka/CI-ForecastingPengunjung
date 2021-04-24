<?php
defined('BASEPATH') or exit ('no direct script acaess allowed');
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('My_model');
	}
	public function index(){
		$tglawal = '2018-01-01';
		$tglakhir = '2018-12-31';
		$x['ti'] = $this->My_model->totaldata($tglawal,$tglakhir,'51')->num_rows();
		$x['te'] = $this->My_model->totaldata($tglawal,$tglakhir,'52')->num_rows();
		$x['si'] = $this->My_model->totaldata($tglawal,$tglakhir,'53')->num_rows();
		$x['tm'] = $this->My_model->totaldata($tglawal,$tglakhir,'54')->num_rows();
		$x['tind'] = $this->My_model->totaldata($tglawal,$tglakhir,'57')->num_rows();
		$x['data'] = $this->My_model->getChart();
		$this->load->view('index',$x);
	}
	public function editdata(){
		$data=array(
			'bulan'	=> $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun'),
			'jumlah'=> $this->input->post('jumlah'),
			'fakultas'=> $this->input->post('fakultas'),
		);
		$this->db->where('id',$_POST['id']);
		$this->db->update('perpus',$data);
		$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
		redirect('admin/ft');
	}
	public function hapusdata($id){
		$this->My_model->hapusdata('perpus',$id,'id');
		
		if($this->db->affected_rows()){
			$this->session->set_flashdata('info','Berhasil terhapus.');
			redirect('Admin/ft');
		}else{
			$this->session->set_flashdata('info','Gagal terhapus.');
			redirect('Admin/ft');
		}
	}
	// Tampil Fakultas	 Teknik
	public function ft(){
		/*$data['tpengunjung']=$this->My_model->tampildata('perpus','id');*/
		$data['tpengunjung']=$this->My_model->tampilwhere('FAKULTAS TEKNIK');
		$this->load->view('datapengunjung',$data);
	}
	public function tambah(){
		$data = array(
			'fakultas' 	=>$this->input->post('fakultas'),
			'bulan'		=>$this->input->post('bulan'),
			'tahun'		=>$this->input->post('tahun'),
			'jumlah'	=>$this->input->post('jumlah')
		);
		$query = $this->My_model->simpandata('perpus',$data);
		if($query){
			$this->session->set_flashdata('info','Berhasil menambah data');
			redirect('admin/ft');
		}
	}
	public function totaldata(){
		$tglawal	= date('Y-m-d',strtotime($this->input->post('tglawal')));
		$tglakhir 	= date("Y-m-d",strtotime($this->input->post('tglakhir')));
		$ti = $this->My_model->totaldata($tglawal,$tglakhir,'51')->num_rows();
		$te = $this->My_model->totaldata($tglawal,$tglakhir,'52')->num_rows();
		$si = $this->My_model->totaldata($tglawal,$tglakhir,'53')->num_rows();
		$tm = $this->My_model->totaldata($tglawal,$tglakhir,'54')->num_rows();
		$tind = $this->My_model->totaldata($tglawal,$tglakhir,'57')->num_rows();
		$data['teknik'] = $ti+$te+$si+$tm+$tind;

		$data['ti']=$ti;
		$data['te']=$te;
		$data['si']=$si;
		$data['tm']=$tm;
		$data['tind']=$tind;
		$this->load->view('totalpengunjung',$data);
	}

	//About
	public function about(){
		$this->load->view('about');
	}
	
}
?>