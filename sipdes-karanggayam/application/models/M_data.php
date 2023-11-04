<?php 

class M_data extends CI_Model{
	
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	
	// FUNGSI CRUD
	// fungsi untuk mengambil data dari database
	function get_data($table){
		return $this->db->get($table);
	}

	// fungsi untuk menginput data ke database
	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	// fungsi untuk mengedit data
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	// fungsi untuk mengupdate atau mengubah data di database
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	// fungsi untuk menghapus data dari database
	function delete_data($where,$table){
		$this->db->delete($table,$where);
	}
	
	public function get_file_name($id, $field)
    {
        // Mengambil nama file dari database berdasarkan ID dan nama kolom
        $this->db->select($field);
        $this->db->where('id', $id);
        return $this->db->get('srt_kelahiran')->row()->$field;
    }
	
	public function get_total_rows($table)
	{
    	$this->db->from($table);
    	return $this->db->count_all_results();
	}
	// AKHIR FUNGSI CRUD

	
}

?>