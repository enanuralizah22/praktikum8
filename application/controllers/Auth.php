<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function v_karyawan()
	{
		$data['judul'] = 'Daftar Karyawan';
		$data['mahasiswa'] = $this->m_mahasisa->KaryawanJoinJabatan();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/v_karyawan', $data);
		$this->load->view('templates/footer');
	}
}
