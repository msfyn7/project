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
		$data['jumlah_penduduk'] = $this->db->from('penduduk')->count_all_results();

		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/includes/footer');
	}

	public function penduduk()
	{
		$data['penduduk'] = $this->m_data->get_data('penduduk')->result_array();
		$data['title'] = "Admin Panel";
		$data['page'] = "Data penduduk";
		
		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/penduduk/index', $data);
		$this->load->view('admin/includes/footer');
	}
	
	public function tambah_penduduk()
	{

		$data['title'] = "Admin Panel";
		$data['page'] = "Tambah penduduk";

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/penduduk/tambah_penduduk');
		$this->load->view('admin/includes/footer');
	}

	public function input_penduduk()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[penduduk.nik]');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('blood_type', 'Golongan Darah', 'required');
		$this->form_validation->set_rules('address', 'Alamat', 'required');
		$this->form_validation->set_rules('dusun', 'Dusun', 'required');
		$this->form_validation->set_rules('rt_rw', 'RT/RW', 'required');
		$this->form_validation->set_rules('village', 'Desa', 'required');
		$this->form_validation->set_rules('subdistrict', 'Kecamatan', 'required');
		$this->form_validation->set_rules('regency', 'Kabupaten', 'required');
		$this->form_validation->set_rules('province', 'Provinsi', 'required');
		$this->form_validation->set_rules('religion', 'Agama', 'required');
		$this->form_validation->set_rules('is_married', 'Perkawinan', 'required');
		$this->form_validation->set_rules('job_status', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('subdistrict', 'Kewarganegaraan', 'required');

		if ($this->form_validation->run() == FALSE) {

			$data['title'] = "Admin Panel";
			$data['page'] = "Tambah Penduduk";

			$this->load->view('admin/includes/header', $data);
			$this->load->view('admin/includes/sidebar');
			$this->load->view('admin/penduduk/tambah_penduduk');
			$this->load->view('admin/includes/footer');
			
		} else {

			$nik = $this->input->post('nik');
			$name = strtoupper($this->input->post('name'));
			$tempatLahir = $this->input->post('tempatLahir');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$gender = $this->input->post('gender');
			$blood_type = $this->input->post('blood_type');
			$address = strtoupper($this->input->post('address'));
			$dusun = $this->input->post('dusun');
			$rt_rw = $this->input->post('rt_rw');
			$village = $this->input->post('village');
			$subdistrict = $this->input->post('subdistrict');
			$regency = $this->input->post('regency');
			$province = $this->input->post('province');
			$religion = $this->input->post('religion');
			$is_married = $this->input->post('is_married');
			$job_status = $this->input->post('job_status');
			$citizenship = $this->input->post('citizenship');

			$data = array(
				'nik' => $nik,
				'name' => $name,
				'place_of_birth' => $tempatLahir,
				'date_of_birth' => $tanggalLahir,
				'gender' => $gender,
				'blood_type' => $blood_type,
				'address' => $address,
				'dusun' => $dusun,
				'rt_rw' => $rt_rw,
				'village' => $village,
				'subdistrict' => $subdistrict,
				'regency' => $regency,
				'province' => $province,
				'religion' => $religion,
				'is_married' => $is_married,
				'job_status' => $job_status,
				'subdistrict' => $subdistrict,
				'citizenship' => $citizenship
			);
			
			$this->m_data->insert_data($data,'penduduk');
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Data Penduduk berhasil ditambahkan!</div>');
			redirect(base_url('admin/penduduk'));
		}

	}

	public function ubah_penduduk($id)
	{
		$where = array(
			'nik' => $id
		);

		$data['penduduk'] = $this->m_data->edit_data($where, 'penduduk')->result();
		$data['title'] = "Admin Panel";
		$data['page'] = "Edit Penduduk";

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/penduduk/ubah_penduduk', $data);
		$this->load->view('admin/includes/footer');
	}
	
	public function update_penduduk() 
	{
	        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[penduduk.nik]');
    		$this->form_validation->set_rules('name', 'Name', 'required');
    		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required');
    		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required');
    		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
    		$this->form_validation->set_rules('blood_type', 'Golongan Darah', 'required');
    		$this->form_validation->set_rules('address', 'Alamat', 'required');
    		$this->form_validation->set_rules('dusun', 'Dusun', 'required');
    		$this->form_validation->set_rules('rt_rw', 'RT/RW', 'required');
    		$this->form_validation->set_rules('village', 'Desa', 'required');
    		$this->form_validation->set_rules('subdistrict', 'Kecamatan', 'required');
    		$this->form_validation->set_rules('regency', 'Kabupaten', 'required');
    		$this->form_validation->set_rules('province', 'Provinsi', 'required');
    		$this->form_validation->set_rules('religion', 'Agama', 'required');
    		$this->form_validation->set_rules('is_married', 'Perkawinan', 'required');
    		$this->form_validation->set_rules('job_status', 'Pekerjaan', 'required');
    		$this->form_validation->set_rules('subdistrict', 'Kewarganegaraan', 'required');
	        
	        $nik = $this->input->post('nik');
			$name = strtoupper($this->input->post('name'));
			$tempatLahir = $this->input->post('tempatLahir');
			$tanggalLahir = $this->input->post('tanggalLahir');
			$gender = $this->input->post('gender');
			$blood_type = $this->input->post('blood_type');
			$address = strtoupper($this->input->post('address'));
			$dusun = $this->input->post('dusun');
			$rt_rw = $this->input->post('rt_rw');
			$village = $this->input->post('village');
			$subdistrict = $this->input->post('subdistrict');
			$regency = $this->input->post('regency');
			$province = $this->input->post('province');
			$religion = $this->input->post('religion');
			$is_married = $this->input->post('is_married');
			$job_status = $this->input->post('job_status');
			$citizenship = $this->input->post('citizenship');
			
			$data = array(
				'name' => $name,
				'place_of_birth' => $tempatLahir,
				'date_of_birth' => $tanggalLahir,
				'gender' => $gender,
				'blood_type' => $blood_type,
				'address' => $address,
				'dusun' => $dusun,
				'rt_rw' => $rt_rw,
				'village' => $village,
				'subdistrict' => $subdistrict,
				'regency' => $regency,
				'province' => $province,
				'religion' => $religion,
				'is_married' => $is_married,
				'job_status' => $job_status,
				'subdistrict' => $subdistrict,
				'citizenship' => $citizenship
			);
		
			$where = array(
			    'nik' => $nik
			    ); 
			    
			$this->m_data->update_data($where, $data, 'penduduk');
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Data penduduk berhasil diperbarui!</div>');
			redirect(base_url('admin/penduduk'));
	}
	
	public function hapus_penduduk($id)
	{
		$where = array(
			'nik' => $id
		);

		$this->m_data->delete_data($where,'penduduk');
		$this->session->set_flashdata('notif', '<div class="alert alert-danger" role="alert">Data penduduk berhasil dihapus!</div>');
		redirect(base_url().'admin/penduduk/index');
	}
	
	public function surat_kelahiran()
	{
		$data['surat'] = $this->m_data->get_data('srt_kelahiran')->result_array();
		$data['title'] = "Admin Panel";
		$data['page'] = "Surat Kelahiran";
		
	    $this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/surat_kelahiran/index', $data);
		$this->load->view('admin/includes/footer');
	}
	
	public function create_surat_kelahiran()
	{
	    $this->db->select('*'); 
	    $this->db->from('srt_kelahiran'); 
	    $this->db->order_by('id', 'DESC'); 
	    $this->db->limit(1); 
	    
	    $query = $this->db->get();
	    $row = $query->row();
	    $current = $row->id;
	    $id = $current + 1;
	    
	    $no = '112';
	    $bulan = date('m');
	    $tahun = date('Y');
	    $no_urut = '0'.$id;
	    
	    $data['title'] = "Admin Panel";
		$data['page'] = "Buat Surat Kelahiran";
	    $data['no_surat'] = $no.'/'.$no_urut.'/'.$bulan.'/'.$tahun;

		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/surat_kelahiran/buat_surat', $data);
		$this->load->view('admin/includes/footer');
	}
	
	public function input_data_kelahiran()
	{
	    $this->form_validation->set_rules('no_surat', 'Nomor Surat', 'required|trim|is_unique[srt_kelahiran.no_surat]');
	    $this->form_validation->set_rules('baby_name', 'Nama Bayi', 'required', array('required' => 'Nama Bayi harus diisi.'));
        $this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harus diisi.'));
        $this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir harus diisi.'));
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required', array('required' => 'Jenis Kelamin harus diisi.'));
        $this->form_validation->set_rules('father_name', 'Nama Ayah', 'required', array('required' => 'Nama Ayah harus diisi.'));
        $this->form_validation->set_rules('mother_name', 'Nama Ibu', 'required', array('required' => 'Nama Ibu harus diisi.'));
        $this->form_validation->set_rules('address', 'Alamat', 'required', array('required' => 'Alamat harus diisi.'));
	    $this->form_validation->set_rules('surat_pengantar', 'Surat Pengantar', 'callback_check_file_upload[surat_pengantar]');
        $this->form_validation->set_rules('surat_ket_lahir', 'Surat Keterangan Lahir', 'callback_check_file_upload[surat_ket_lahir]');
        $this->form_validation->set_rules('book_of_married', 'Buku Nikah', 'callback_check_file_upload[book_of_married]');
        $this->form_validation->set_rules('father_id', 'KTP Ayah', 'callback_check_file_upload[father_id]');
        $this->form_validation->set_rules('mother_id', 'KTP Ibu', 'callback_check_file_upload[mother_id]');
        $this->form_validation->set_rules('kk', 'Kartu Keluarga', 'callback_check_file_upload[kk]');

        
        if ($this->form_validation->run() == FALSE) {
            
            $this->db->select('*'); 
    	    $this->db->from('srt_kelahiran'); 
    	    $this->db->order_by('id', 'DESC'); 
    	    $this->db->limit(1); 
    	    
    	    $query = $this->db->get();
            $row = $query->row();
            $current = $row->id;
            $id = $current + 1;
            
            $no = '112';
    	    $bulan = date('m');
    	    $tahun = date('Y');
    	    $no_urut = '0'.$id;
    	    
    	    $data['title'] = "Admin Panel";
    		$data['page'] = "Buat Surat Kelahiran";
    	    $data['no_surat'] = $no.'/'.$no_urut.'/'.$bulan.'/'.$tahun;
    
    		$this->load->view('admin/includes/header', $data);
    		$this->load->view('admin/includes/sidebar');
    		$this->load->view('admin/surat_kelahiran/buat_surat', $data);
    		$this->load->view('admin/includes/footer');
    		
        } else {
            
            $no_srt = $this->input->post('no_surat');
            $baby_name = $this->input->post('baby_name');
            $tempatLahir = $this->input->post('tempatLahir');
            $tanggalLahir = $this->input->post('tanggalLahir');
            $gender = $this->input->post('gender');
            $father_name = $this->input->post('father_name');
            $mother_name = $this->input->post('mother_name');
            $address = $this->input->post('address');
            $surat_pengantar = $_FILES['surat_pengantar']['name'];
            $surat_ket_lahir = $_FILES['surat_ket_lahir']['name'];
            $book_of_married = $_FILES['book_of_married']['name'];
            $father_id = $_FILES['father_id']['name'];
            $mother_id = $_FILES['mother_id']['name'];
            $kk = $_FILES['kk']['name'];
            $tgl_permohonan = date('Y:m:d H:i:s');
            
            $data = array(
                'no_surat' => $no_srt,
                'baby_name' => $baby_name,
                'tempat_lahir' => $tempatLahir,
                'tanggal_lahir' => $tanggalLahir,
                'gender' => $gender,
                'father_name' => $father_name,
                'mother_name' => $mother_name,
                'address' => $address,
                'surat_pengantar' => $surat_pengantar,
                'surat_ket_lahir' => $surat_ket_lahir,
                'book_of_married' => $book_of_married,
                'father_id' => $father_id,
                'mother_id' => $mother_id,
                'kk' => $kk,
                'tgl_permohonan' => $tgl_permohonan
            );
            
            $this->m_data->insert_data($data, 'srt_kelahiran');
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Selamat! surat kamu berhasil dibuat.</div>');
            redirect(base_url().'admin/surat_kelahiran');
        }
	}
	
	public function check_file_upload($str, $field)
    {
        $custom_error_messages = array(
            'surat_pengantar' => 'Surat Pengantar harus diisi.',
            'surat_ket_lahir' => 'Surat Keterangan Lahir harus diisi.',
            'book_of_married' => 'Buku Nikah harus diisi.',
            'father_id' => 'KTP Ayah harus diisi.',
            'mother_id' => 'KTP Ibu harus diisi.',
            'kk' => 'Kartu Keluarga harus diisi.'
        );
    
        if (empty($_FILES[$field]['name'])) {
            $this->form_validation->set_message('check_file_upload', $custom_error_messages[$field]);
            return FALSE;
        } else {
            $allowed_types = array('pdf', 'jpg', 'jpeg', 'png'); // Tipe file yang diperbolehkan
            $file_ext = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);
    
            if (!in_array($file_ext, $allowed_types)) {
                $this->form_validation->set_message('check_file_upload', 'Tipe file ' . $field . ' tidak valid. Hanya diperbolehkan: PDF, JPG, JPEG, PNG.');
                return FALSE;
            }
        }
    
        return TRUE;
    }

	public function edit_srt_kelahiran($id)
	{
	    $where = array(
	        'id' => $id
	    );
	    
	    $data['surat'] = $this->m_data->edit_data($where, 'srt_kelahiran')->result();
		$data['title'] = "Admin Panel";
		$data['page'] = "Edit Surat Kelahiran";
		
	    $this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/surat_kelahiran/edit_surat', $data);
		$this->load->view('admin/includes/footer');
	    
	}
	
	public function update_srt_kelahiran()
	{
	    
	    $this->form_validation->set_rules('baby_name', 'Nama Bayi', 'required', array('required' => 'Nama Bayi harus diisi.'));
        $this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harus diisi.'));
        $this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir harus diisi.'));
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required', array('required' => 'Jenis Kelamin harus diisi.'));
        $this->form_validation->set_rules('father_name', 'Nama Ayah', 'required', array('required' => 'Nama Ayah harus diisi.'));
        $this->form_validation->set_rules('mother_name', 'Nama Ibu', 'required', array('required' => 'Nama Ibu harus diisi.'));
        $this->form_validation->set_rules('address', 'Alamat', 'required', array('required' => 'Alamat harus diisi.'));
        
        if (!empty($_FILES['surat_pengantar']['name'])) {
	    $this->form_validation->set_rules('surat_pengantar', 'Surat Pengantar', 'callback_check_file_update[surat_pengantar]');
        }
        if (!empty($_FILES['surat_ket_lahir']['name'])) {
        $this->form_validation->set_rules('surat_ket_lahir', 'Surat Keterangan Lahir', 'callback_check_file_update[surat_ket_lahir]');
	   	}
	   	if (!empty($_FILES['book_of_married']['name'])) {
        $this->form_validation->set_rules('book_of_married', 'Buku Nikah', 'callback_check_file_update[book_of_married]');
	   	}
	   	if (!empty($_FILES['father_id']['name'])) {
        $this->form_validation->set_rules('father_id', 'KTP Ayah', 'callback_check_file_update[father_id]');
	   	}
	   	if (!empty($_FILES['mother_id']['name'])) {
        $this->form_validation->set_rules('mother_id', 'KTP Ibu', 'callback_check_file_update[mother_id]');
	   	}
	   	if (!empty($_FILES['kk']['name'])) {
        $this->form_validation->set_rules('kk', 'Kartu Keluarga', 'callback_check_file_update[kk]');
        }

        if ($this->form_validation->run() == FALSE) {
            
            $id = $this->input->post('id');
            
            $where = array(
	        'id' => $id
	        );
	    
    	    $data['surat'] = $this->m_data->edit_data($where, 'srt_kelahiran')->result();
    		$data['title'] = "Admin Panel";
    		$data['page'] = "Edit Surat Kelahiran";
    		
    	    $this->load->view('admin/includes/header', $data);
    		$this->load->view('admin/includes/sidebar');
    		$this->load->view('admin/surat_kelahiran/edit_surat', $data);
    		$this->load->view('admin/includes/footer');
            
        } else {
            
            $id = $this->input->post('id');
            $no_srt = $this->input->post('no_surat');
            $baby_name = $this->input->post('baby_name');
            $tempatLahir = $this->input->post('tempatLahir');
            $tanggalLahir = $this->input->post('tanggalLahir');
            $gender = $this->input->post('gender');
            $father_name = $this->input->post('father_name');
            $mother_name = $this->input->post('mother_name');
            $address = $this->input->post('address');
            $tgl_edit = date('Y:m:d H:i:s');
     
            $data = array(
                'baby_name' => $baby_name,
                'tempat_lahir' => $tempatLahir,
                'tanggal_lahir' => $tanggalLahir,
                'gender' => $gender,
                'father_name' => $father_name,
                'mother_name' => $mother_name,
                'address' => $address,
                'tgl_edit' => $tgl_edit
            );
            
            if (!empty($_FILES['surat_pengantar']['name'])) {
                $data['surat_pengantar'] = $_FILES['surat_pengantar']['name'];
            }
            
            if (!empty($_FILES['surat_ket_lahir']['name'])) {
                $data['surat_ket_lahir'] = $_FILES['surat_ket_lahir']['name'];
            }
            
            if (!empty($_FILES['book_of_married']['name'])) {
                $data['book_of_married'] = $_FILES['book_of_married']['name'];
            }
            
            if (!empty($_FILES['father_id']['name'])) {
                $data['father_id'] = $_FILES['father_id']['name'];
            }
            
            if (!empty($_FILES['mother_id']['name'])) {
                $data['mother_id'] = $_FILES['mother_id']['name'];
            }
            
            if (!empty($_FILES['kk']['name'])) {
                $data['kk'] = $_FILES['kk']['name'];
            }
            
            $where = array(
                'id' => $id
                );
        
            $this->m_data->update_data($where, $data, 'srt_kelahiran');
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Data surat berhasil diperbarui!</div>');
    		redirect(base_url('admin/surat_kelahiran/index'));
        }
	}
	
	public function check_file_update($str, $field)
    {
        $allowed_types = array('pdf', 'jpg', 'jpeg', 'png'); // Tipe file yang diperbolehkan
        $file_ext = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);
    
        if (!in_array($file_ext, $allowed_types)) {
            $this->form_validation->set_message('check_file_update', 'Tipe file ' . $field . ' tidak valid. Hanya diperbolehkan: PDF, JPG, JPEG, PNG.');
            return FALSE;
        }

    }
	
	public function delete_srt_kelahiran($id)
	{
	    $where = array(
	        'id' => $id
	        );
	   $this->m_data->delete_data($where, 'srt_kelahiran');
	   $this->session->set_flashdata('notif', '<div class="alert alert-danger" role="alert">Data surat berhasil dihapus!</div>');
	   redirect(base_url().'admin/surat_kelahiran');
	}
	
}
