<?php

class Morimaps_user_m extends CI_Model {

	public function getAvatar()
	{
		return $this->db->get('user');
	}

	public function simpan($data)
	{
		$this->db->insert('peta_persebaran_petani_kelor', $data);
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('peta_persebaran_petani_kelor');
		$this->db->order_by('id', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('peta_persebaran_petani_kelor');
		$this->db->where('peta_persebaran_petani_kelor', $id);
		return $this->db->get()->row();
	}

	public function edit($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('peta_persebaran_petani_kelor', $data);	
	}

	public function hapus($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->delete('peta_persebaran_petani_kelor', $data);
	}
}
