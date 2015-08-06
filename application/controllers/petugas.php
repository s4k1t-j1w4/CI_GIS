<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class petugas extends CI_Controller {
	function __Construct()
    {
        parent ::__construct();
    }
	
	function list_petugas()
    {
        $this->load->model('m_petugas');
        $data['judul'] = 'List Petugas';
        $data['include/petugas/view_list_petugas'] = $this->m_petugas->get_list_petugas_all();
        $this->load->view('view_list_petugas', $data);
    }
	/*	
	function get_data_petugas(){
		$this->load->model('m_petugas');
		$res=$this->m_petugas->get_data_m_petugas();
		echo json_encode($res);
	}
	
	function tambah()
	{
		$this->load->view('include/petugas/view_tambah_petugas');
	}
	
	function ubah()
	{
		$param=array('id_petugas'=>$_GET['id_petugas']);
		$this->load->model('m_petugas');
		$data['petugas']=$this->m_petugas->get_data_petugas_by_id($param);
		
		$this->load->view('view_edit_petugas',$data);
	}

	function proses_tambah()
	{
		$data=array(
		'nip'=>$_POST['nip'],
		'nama'=>$_POST['nama'],
		'tgl_lahir'=>$_POST['tgl_lahir'],
		'alamat'=>$_POST['alamat'],
		);
		$this->load->model('m_pegawai');
		$res=$this->m_pegawai->tambah($data);
		//echo json_encode($res);
		if($res){
			redirect(site_url());
		}else{
			echo "Penambahan Data Gagal <br>";
			echo '<a href="'.site_url('pegawai/tambah').'">Kembali</a>';
		}
	}
	function proses_ubah()
	{
		$data=array(
		'id'=>$_POST['id'],
		'nip'=>$_POST['nip'],
		'nama'=>$_POST['nama'],
		'tgl_lahir'=>$_POST['tgl_lahir'],
		'alamat'=>$_POST['alamat'],
		);
		$this->load->model('m_pegawai');
		$res=$this->m_pegawai->ubah($data);
		//echo json_encode($res);
		if($res){
			redirect(site_url());
		}else{
			echo "Pengubahan Data Gagal <br>";
			echo '<a href="'.site_url('pegawai/tambah').'">Kembali</a>';
		}
	}

	function hapus()
	{
		$data=array(
			'id_petugas'=>$_GET['id_petugas']
		);
		$this->load->model('m_petugas');
		$res=$this->m_petugas->hapus($data);
		if($res){
			redirect(site_url());
		}else{
			echo "Hapus Data Gagal <br>";
			echo '<a href="'.site_url().'">Kembali</a>';
		}
	}
	
*/	
	public function reg_petugas()
	{
		$this->load->view('view_reg_petugas');
	}
	public function do_reg_petugas()
	{
		if($this->m_petugas->add_petugas())
		{
			echo "hi".$this->input->post('username')."Registrasi Berhasil";
		}
		else
		{
			echo "Registrasi Gagal";
		}
	}
}