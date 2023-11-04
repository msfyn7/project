<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->library('Dompdf_gen');
    }

    public function export_to_pdf() {
        
        $data['santri'] = $this->M_data->get_data('santri')->result_array();

		$this->load->view('files/santri/pdf', $data);
        
        $paper_size = "A4";
        $oriention  = "landscape";
        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $oriention);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Data_santri.pdf", array(attachment => 0));
        
    }
    
    public function export_pdf() {
        
        $data['santri'] = $this->M_data->get_data('guru')->result_array();

		$this->load->view('files/guru/pdf', $data);
        
        $paper_size = "A4";
        $oriention  = "landscape";
        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $oriention);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Data_guru.pdf", array(attachment => 0));
        
    }
    
}