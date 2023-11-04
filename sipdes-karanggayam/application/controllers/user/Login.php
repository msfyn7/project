<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {

		$this->load->view('user/login');

	}

	public function auth()
	{
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {

			redirect('user/login');

		} else {
			$this->_login();
		}

	}

	private function _login() {

		$nik = $this->input->post('nik');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['nik' => $nik])->result_array();

		if ($user) {
			if ($user['is_active'] == 1) {
				if (password_verify($password == $user['password'])) {
					$data = [
						'nik' => $user['nik'],
						'user_role' => $user['role_id'] 
					];
					$this->session->set_userdata($data);

					$this->load->view('admin/header');
					$this->load->view('admin/sidebar');
					$this->load->view('admin/index', $data);
					$this->load->view('admin/footer');
					
				} else {

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi tidak benar!</div>');
					redirect('user/login');
					
				}
			} else {
				
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Status akun kamu belum aktif! Silakan hubungi admin</div>');
				redirect('user/login');
			}
		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIK kamu belum terdaftar! Silakan hubungi admin</div>');
			redirect('user/login');
		}

		

	}
}