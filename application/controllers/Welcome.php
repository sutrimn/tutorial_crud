<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('mbuah');

		$data['buah'] = $this->mbuah->getBuah();
		$this->load->view('welcome_message',$data);
	}


	public function tambah()
	{
		if (!empty($this->input->post())) {
			#kalo gak kosong diproses
			$this->load->model('mbuah');
			$data = array('buahNama' => $this->input->post('nama_buah'),
							'buahJumlah' => $this->input->post('jumlah_buah')
							);
			$this->mbuah->tambah($data);
			redirect('welcome');
		}else{
			#kalo gada input di tampilkan halaman tambah

			$this->load->view('v_tambah');
		}
	}
	public function edit($id)
	{
		$this->load->model('mbuah');
		if (!empty($this->input->post())) {
			#kalo gak kosong diproses
			$data = array('buahNama' => $this->input->post('nama_buah'),
							'buahJumlah' => $this->input->post('jumlah_buah')
							);
			$this->mbuah->edit($data,$id);
			redirect('welcome');
		}else{
			#kalo gada input di tampilkan halaman tambah
			$data['buah'] = $this->mbuah->getbuah_by_id($id);
			$this->load->view('v_edit',$data);
		}
	}	

	public function delete($id){
		$this->load->model('mbuah');
		$this->mbuah->delete($id);
		redirect('welcome');
	}
}
