<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbuah extends CI_Model {

	public function getBuah()
	{
		return $this->db->get('buah');
	}

	public function tambah($data){
		return $this->db->insert('buah',$data);
	}

	public function getbuah_by_id($id){
		return $this->db->where('idbuah',$id)->get('buah');
	}

	public function edit($data,$id){
		return $this->db->where('idbuah',$id)->update('buah',$data);
	}

	public function delete($id){
		return $this->db->where('idbuah', $id)->delete('buah');
	}
}
