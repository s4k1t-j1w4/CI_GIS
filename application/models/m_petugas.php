<?php 
class m_petugas extends CI_Model
{
	function login($username,$password)
	{
		$this->db->select('id_petugas,username,password');
		$this->db->from('petugas');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$this->db->limit(1);
		
		$query = $this->db->get();
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
		
	
	function get_list_petugas_all()
    {
        $query=$this->db->query("SELECT * FROM petugas ORDER BY id_petugas ASC");
        return $query->result();
    }
	/*
	function get_data_petugas(){
		$q=$this->db->get('petugas');
		$data=$q->result();
		return $data;
	}
	
	function get_data_petugas_by_id($data){
		$this->db->where($data);
		$q=$this->db->get('petugas');
		
		$data=$q->first_row();
		return $data;
	}	
	
	function tambah($data){
		$q=$this->db->insert('petugas',$data);
		return $q;
	}
	
	function ubah($data){
		$this->db->where('id',$data['id']);
		$q=$this->db->update('petugas',$data);
		return $q;
	}
	
	function hapus($data)
	{
		$q=$this->db->delete('petugas',$data);
		return $q;
	*/
	
	public function add_petugas()
	{
		$data=array(
		'nama'=>$this->input->post('nama'),
		'role'=>$this->input->post('role'),
		'tgl_lahir'=>$this->input->post('tgl_lahir'),
		'no_tlp'=>$this->input->post('no_tlp'),
		'username'=>$this->input->post('username'),
		'password'=>md5($this->input->post('password')),
		);	
		$this->db->insert('petugas',$data);
		return true;
	}
}
?>