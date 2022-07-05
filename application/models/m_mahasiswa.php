<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_mahasiswa extends CI_Model
{

	public function getAllMahasiswa()
	{
		return $this->db->get('tb_mahasiswa')->result_array();
	}
}
