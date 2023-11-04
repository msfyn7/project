<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function santri()
	{
		$dataSantri['santri'] = $this->m_data->get_data('santri')->result_array();
		$data['title'] = "Admin Panel";
		$data['page'] = "Data Santri";

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/santri', $dataSantri);
		$this->load->view('admin/includes/footer');
	}
	
	public function tambahSantri()
	{

		$data['title'] = "Admin Panel";
		$data['page'] = "Tambah Santri";

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/tambah_santri');
		$this->load->view('admin/includes/footer');
	}

	public function inputSantri()
	{
		$this->form_validation->set_rules('nis', 'NIS', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nomorHP', 'Nomor HP', 'required|trim|is_unique[santri.nomor_hp]');
		$this->form_validation->set_rules('namaAyah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('pekerjaan1', 'Pekerjaan Ayah', 'required');
		$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('pekerjaan2', 'Pekerjaan Ibu', 'required');

		if ($this->form_validation->run() == FALSE) {

			$data['title'] = "Admin Panel";
			$data['page'] = "Tambah Santri";

			$this->load->view('admin/includes/header', $data);
			$this->load->view('admin/includes/sidebar');
			$this->load->view('admin/tambah_santri');
			$this->load->view('admin/includes/footer');
			
		} else {

			$nis = $this->input->post('nis');
			$nama = $this->input->post('nama');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$tempatLahir = $this->input->post('tempatLahir');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$alamat = $this->input->post('alamat');
			$nomorHp = $this->input->post('nomorHP');
			$namaAyah = $this->input->post('namaAyah');
			$pekerjaan1 = $this->input->post('pekerjaan1');
			$namaIbu = $this->input->post('namaIbu');
			$pekerjaan2 = $this->input->post('pekerjaan2');

			$data = array(
				'nis' => $nis,
				'nama' => $nama,
				'jenis_kelamin' => $jenisKelamin,
				'tempat_lahir' => $tempatLahir,
				'tanggal_lahir' => $tanggalLahir,
				'alamat' => $alamat,
				'nomor_hp' => $nomorHp,
				'nama_ayah' => $namaAyah,
				'pekerjaan1' => $pekerjaan1,
				'nama_ibu' => $namaIbu,
				'pekerjaan2' => $pekerjaan2
			);

			$this->m_data->insert_data($data,'santri');
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Data Santri berhasil ditambahkan!</div>');
			redirect(base_url('admin/santri'));
		}

	}

	public function editSantri($id)
	{
		$where = array(
			'id_santri' => $id
		);

		$dataSantri['santri'] = $this->m_data->edit_data($where, 'santri')->result();
		$data['title'] = "Admin Panel";
		$data['page'] = "Edit Santri";

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/edit_santri', $dataSantri);
		$this->load->view('admin/includes/footer');
	}
	
	public function updateSantri() 
	
	{
	        $this->form_validation->set_rules('nis', 'NIS', 'required|trim');
    		$this->form_validation->set_rules('nama', 'Nama', 'required');
    		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required');
    		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required');
    		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required');
    		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
    		$this->form_validation->set_rules('nomorHP', 'Nomor HP', 'required|trim|is_unique[santri.nomor_hp]');
    		$this->form_validation->set_rules('namaAyah', 'Nama Ayah', 'required');
    		$this->form_validation->set_rules('pekerjaan1', 'Pekerjaan Ayah', 'required');
    		$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'required');
    		$this->form_validation->set_rules('pekerjaan2', 'Pekerjaan Ibu', 'required');
	        
	        $id = $this->input->post('id');
	        $nis = $this->input->post('nis');
			$nama = $this->input->post('nama');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$tempatLahir = $this->input->post('tempatLahir');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$alamat = $this->input->post('alamat');
			$nomorHp = $this->input->post('nomorHP');
			$namaAyah = $this->input->post('namaAyah');
			$pekerjaan1 = $this->input->post('pekerjaan1');
			$namaIbu = $this->input->post('namaIbu');
			$pekerjaan2 = $this->input->post('pekerjaan2');
			
			$data = array(
			    'nis' => $nis,
				'nama' => $nama,
				'jenis_kelamin' => $jenisKelamin,
				'tempat_lahir' => $tempatLahir,
				'tanggal_lahir' => $tanggalLahir,
				'alamat' => $alamat,
				'nomor_hp' => $nomorHp,
				'nama_ayah' => $namaAyah,
				'pekerjaan1' => $pekerjaan1,
				'nama_ibu' => $namaIbu,
				'pekerjaan2' => $pekerjaan2
			    );
		
			$where = array(
			    'id_santri' => $id
			    ); 
			    
			$this->m_data->update_data($where, $data, 'santri');
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Data Santri berhasil diperbarui!</div>');
			redirect(base_url('admin/santri'));
	}
	
	public function deleteSantri($id)
	{
		$where = array(
			'id_santri' => $id
		);

		$this->m_data->delete_data($where,'santri');
		redirect(base_url().'admin/santri');
	}
	
	public function guru()
	{
	    $data['guru'] = $this->m_data->get_data('guru')->result_array();
		$data['title'] = "Admin Panel";
		$data['page'] = "Data Guru";

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/guru', $data);
		$this->load->view('admin/includes/footer');
	    
	}
	
	public function tambahGuru()
	{

		$data['title'] = "Admin Panel";
		$data['page'] = "Tambah Guru";

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/tambah_guru');
		$this->load->view('admin/includes/footer');
	}

	public function inputGuru()
	{
		$this->form_validation->set_rules('nig', 'NIG', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nomorHP', 'Nomor HP', 'required|trim|is_unique[guru.nomor_hp]');
		
		if ($this->form_validation->run() == FALSE) {

			$data['title'] = "Admin Panel";
			$data['page'] = "Tambah Guru";

			$this->load->view('admin/includes/header', $data);
			$this->load->view('admin/includes/sidebar');
			$this->load->view('admin/tambah_guru');
			$this->load->view('admin/includes/footer');
			
		} else {

			$nig = $this->input->post('nig');
			$nama = $this->input->post('nama');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$tempatLahir = $this->input->post('tempatLahir');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$alamat = $this->input->post('alamat');
			$nomorHp = $this->input->post('nomorHP');

			$data = array(
				'nig' => $nig,
				'nama' => $nama,
				'jenis_kelamin' => $jenisKelamin,
				'tempat_lahir' => $tempatLahir,
				'tanggal_lahir' => $tanggalLahir,
				'alamat' => $alamat,
				'nomor_hp' => $nomorHp
				
			);

			$this->m_data->insert_data($data,'guru');
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Data Guru berhasil ditambahkan!</div>');
			redirect(base_url('admin/guru'));
		}
		
	}
	
	public function editGuru($id)
	{
	    $where = array(
	        'id_guru' => $id
	        );
	        
	    $data['guru'] = $this->m_data->edit_data($where, 'guru')->result();
	    $data['title'] = 'Admin Panel';
	    $data['page'] = 'Data Guru';
	    
	    $this->load->view('admin/includes/header', $data);
	    $this->load->view('admin/includes/sidebar');
	    $this->load->view('admin/edit_guru', $data);
	    $this->load->view('admin/includes/footer');
	    
	}
	
	public function updateGuru()
	{
	        
	        $this->form_validation->set_rules('nig', 'NIG', 'required|trim');
    		$this->form_validation->set_rules('nama', 'Nama', 'required');
    		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required');
    		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required');
    		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required');
    		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
    		$this->form_validation->set_rules('nomorHP', 'Nomor HP', 'required|trim|is_unique[guru.nomor_hp]');
	        
	        $id = $this->input->post('id');
	        $nig = $this->input->post('nig');
			$nama = $this->input->post('nama');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$tempatLahir = $this->input->post('tempatLahir');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$alamat = $this->input->post('alamat');
			$nomorHp = $this->input->post('nomorHP');

			$data = array(
				'nig' => $nig,
				'nama' => $nama,
				'jenis_kelamin' => $jenisKelamin,
				'tempat_lahir' => $tempatLahir,
				'tanggal_lahir' => $tanggalLahir,
				'alamat' => $alamat,
				'nomor_hp' => $nomorHp
			);
			
			$where = array(
			    'id_guru' => $id
			    );

			$this->m_data->update_data($where, $data, 'guru');
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Data Guru berhasil diperbarui!</div>');
			redirect(base_url('admin/guru'));
	}
	
	public function kelas()
	{
	    $data['kelas'] = $this->m_data->get_data('kelas')->result_array();
	    $data['title'] = 'Admin Panel';
	    $data['page'] = 'Data Kelas';

	    $this->load->view('admin/includes/header', $data);
	    $this->load->view('admin/includes/sidebar');
	    $this->load->view('admin/kelas', $data);
	    $this->load->view('admin/includes/footer');
	}
	
	public function tambahKelas()
	{
		$data['title'] = "Admin Panel";
		$data['page'] = "Tambah Kelas";
		$data['pilih_kelas'] = DATA_KELAS;
		$data['pilih_guru'] = $this->m_data->get_data('guru')->result_array();

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/tambah_kelas', $data);
		$this->load->view('admin/includes/footer');
	}
	
	public function inputKelas()
	{
	    $nama_kelas = $this->input->post('pilihKelas');
	    $pengajar = $this->input->post('pilihGuru');
	    
	    $data = array(
	        'nama_kelas' => $nama_kelas,
	        'pengajar' => $pengajar
	        );
	        
	        $this->m_data->insert_data($data, 'kelas');
	        $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Data Kelas berhasil ditambahkan!</div>');
	        redirect(base_url('admin/kelas'));
	}
	
	public function deleteKelas($id)
	{
	    $where = array(
	        'id_kelas' => $id
	        );
	    $this->m_data->delete_data($where, 'kelas');
	    redirect(base_url('admin/kelas'));
	}
	
}
