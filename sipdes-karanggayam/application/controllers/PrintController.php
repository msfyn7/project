<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrintController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_data');
        
    }

    public function print() {
        
        $data['santri'] = $this->M_data->get_data('santri')->result_array();

		$this->load->view('files/santri/print', $data);
		
    }
    
    public function data_print() {
        
        $data['guru'] = $this->M_data->get_data('guru')->result_array();

		$this->load->view('files/guru/print', $data);
		
    }
    
}