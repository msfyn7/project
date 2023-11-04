<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
			parent::__construct();

			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->model('m_data');
	}

	public function index()
	{
		$data['title'] = "Admin Panel";
		$data['page'] = "Dashboard";
		$data['jumlah_guru'] =$this->db->from('guru')->count_all_results();
		$data['jumlah_santri'] =$this->db->from('santri')->count_all_results();
		$data['kelas'] =$this->db->from('kelas')->count_all_results();

		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/includes/footer');
	}
	
}