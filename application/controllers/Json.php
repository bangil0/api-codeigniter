<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends MY_Controller {
	public function index(){
		$data = $this->db->get('biodata')->result();
		echo json_encode($data);
	}

	public function tambah($nama){
		$this->db->insert('biodata', compact('nama'));
		$data = $this->db->get('biodata')->result();
		echo json_encode($data);	
	}

	public function hapus($id){
		$this->db->delete('biodata', compact('id'));
		$data = $this->db->get('biodata')->result();
		echo json_encode($data);	
	}

	public function ubah($id, $nama){
		$this->db->update('biodata', compact('nama'), compact('id'));
		$data = $this->db->get('biodata')->result();
		echo json_encode($data);	
	}
}
