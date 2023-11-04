<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcelController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('M_data'); 
    }

    public function export_to_excel() {
        // Ambil data dari database
        $data = $this->M_data->get_data('santri')->result();

        require(APPPATH. 'third_party/PHPExcel-1.8/Classes/PHPExcel.php' );
        require(APPPATH. 'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php' );
        
        // Buat objek PHPExcel
        $objPHPExcel = new PHPExcel();

        // Set properti dokumen
        $objPHPExcel->getProperties()->setCreator("App Nurul Islam");
        $objPHPExcel->getProperties()->setLastModifiedBy("App Nurul Islam");
        $objPHPExcel->getProperties()->setTitle("Data Santri");
        $objPHPExcel->getProperties()->setSubject("Data Santri TPQ Nurul Islam");
        $objPHPExcel->getProperties()->setDescription("Data Santri TPQ Nurul Islam");
        $objPHPExcel->getProperties()->setKeywords("PHPExcel");
        $objPHPExcel->getProperties()->setCategory("Kategori");
        
        // Inisialisasi baris awal
        $row = 2;

        // Judul kolom
        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A'.$row, 'No')
                    ->setCellValue('B'.$row, 'NIS')
                    ->setCellValue('C'.$row, 'Nama')
                    ->setCellValue('D'.$row, 'Jenis Kelamin')
                    ->setCellValue('E'.$row, 'Tempat Lahir')
                    ->setCellValue('F'.$row, 'Tanggal Lahir')
                    ->setCellValue('G'.$row, 'Alamat')
                    ->setCellValue('H'.$row, 'Nomor HP')
                    ->setCellValue('I'.$row, 'Nama Ayah')
                    ->setCellValue('J'.$row, 'Pekerjaan Ayah')
                    ->setCellValue('K'.$row, 'Nama Ibu')
                    ->setCellValue('L'.$row, 'Pekerjaan Ibu');
                    
        // Mengatur lebar kolom otomatis
        foreach(range('A', 'L') as $column) {
            $objPHPExcel->getActiveSheet()->getColumnDimension($column)->setAutoSize(true);
        }
            $no = 1;
        // Data santri
        foreach ($data as $santri) {
            $row++;
            
            $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValue('A'.$row, $no)
                        ->setCellValue('B'.$row, $santri->nis)
                        ->setCellValue('C'.$row, $santri->nama)
                        ->setCellValue('D'.$row, $santri->jenis_kelamin)
                        ->setCellValue('E'.$row, $santri->tempat_lahir)
                        ->setCellValue('F'.$row, $santri->tanggal_lahir)
                        ->setCellValue('G'.$row, $santri->alamat)
                        ->setCellValue('H'.$row, $santri->nomor_hp)
                        ->setCellValue('I'.$row, $santri->nama_ayah)
                        ->setCellValue('J'.$row, $santri->pekerjaan1)
                        ->setCellValue('K'.$row, $santri->nama_ibu)
                        ->setCellValue('L'.$row, $santri->pekerjaan2);
            
            $no++;
                        
        }
        
        
        // Set aktivasi sheet pertama sebagai sheet aktif
        $objPHPExcel->setActiveSheetIndex(0);

        // Set header untuk menghasilkan file Excel dengan judul di atas tabel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Data_Santri_TPQ_Nurul_Islam.xlsx"');
        header('Cache-Control: max-age=0');
        
        // Judul di atas tabel
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Data Santri TPQ Nurul Islam');
        $objPHPExcel->getActiveSheet()->mergeCells('A1:L1');
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A2:L2')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        
        // Mengatur border pada sel header
        $headerStyle = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ),
            ),
        );
        $objPHPExcel->getActiveSheet()->getStyle('A1:L1')->applyFromArray($headerStyle);
        $objPHPExcel->getActiveSheet()->getStyle('A2:L2')->applyFromArray($headerStyle);
        
        // Mengatur border luar tabel
        $tableStyle = array(
            'borders' => array(
                'outline' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ),
            ),
        );
        $lastRow = $objPHPExcel->getActiveSheet()->getHighestRow();
        $lastColumn = $objPHPExcel->getActiveSheet()->getHighestColumn();
        $objPHPExcel->getActiveSheet()->getStyle('A1:' . $lastColumn . $lastRow)->applyFromArray($tableStyle);
        
        // Mengatur border vertikal dan horizontal pada seluruh area dengan data
        $lastRow = $objPHPExcel->getActiveSheet()->getHighestRow();
        $lastColumn = $objPHPExcel->getActiveSheet()->getHighestColumn();
        $cellRange = 'A2:' . $lastColumn . $lastRow;
        $objPHPExcel->getActiveSheet()->getStyle($cellRange)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);



        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
    }
    
    public function export_excel() {
        // Ambil data dari database
        $data = $this->M_data->get_data('guru')->result();

        require(APPPATH. 'third_party/PHPExcel-1.8/Classes/PHPExcel.php' );
        require(APPPATH. 'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php' );
        
        // Buat objek PHPExcel
        $objPHPExcel = new PHPExcel();

        // Set properti dokumen
        $objPHPExcel->getProperties()->setCreator("App Nurul Islam");
        $objPHPExcel->getProperties()->setLastModifiedBy("App Nurul Islam");
        $objPHPExcel->getProperties()->setTitle("Data Guru");
        $objPHPExcel->getProperties()->setSubject("Data Guru TPQ Nurul Islam");
        $objPHPExcel->getProperties()->setDescription("Data Guru TPQ Nurul Islam");
        $objPHPExcel->getProperties()->setKeywords("PHPExcel");
        $objPHPExcel->getProperties()->setCategory("Kategori");
        
        // Inisialisasi baris awal
        $row = 2;

        // Judul kolom
        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A'.$row, 'No')
                    ->setCellValue('B'.$row, 'NIG')
                    ->setCellValue('C'.$row, 'Nama')
                    ->setCellValue('D'.$row, 'Jenis Kelamin')
                    ->setCellValue('E'.$row, 'Tempat Lahir')
                    ->setCellValue('F'.$row, 'Tanggal Lahir')
                    ->setCellValue('G'.$row, 'Alamat')
                    ->setCellValue('H'.$row, 'Nomor HP');
                    
        // Mengatur lebar kolom otomatis
        foreach(range('A', 'H') as $column) {
            $objPHPExcel->getActiveSheet()->getColumnDimension($column)->setAutoSize(true);
        }
            $no = 1;
        // Data Guru
        foreach ($data as $guru) {
            $row++;
            
            $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValue('A'.$row, $no)
                        ->setCellValue('B'.$row, $guru->nig)
                        ->setCellValue('C'.$row, $guru->nama)
                        ->setCellValue('D'.$row, $guru->jenis_kelamin)
                        ->setCellValue('E'.$row, $guru->tempat_lahir)
                        ->setCellValue('F'.$row, $guru->tanggal_lahir)
                        ->setCellValue('G'.$row, $guru->alamat)
                        ->setCellValue('H'.$row, $guru->nomor_hp);
            
            $no++;
                        
        }
        
        
        // Set aktivasi sheet pertama sebagai sheet aktif
        $objPHPExcel->setActiveSheetIndex(0);

        // Set header untuk menghasilkan file Excel dengan judul di atas tabel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Data_Guru_TPQ_Nurul_Islam.xlsx"');
        header('Cache-Control: max-age=0');
        
        // Judul di atas tabel
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Data Guru TPQ Nurul Islam');
        $objPHPExcel->getActiveSheet()->mergeCells('A1:H1');
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        
        // Mengatur border pada sel header
        $headerStyle = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ),
            ),
        );
        $objPHPExcel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($headerStyle);
        $objPHPExcel->getActiveSheet()->getStyle('A2:H2')->applyFromArray($headerStyle);
        
        // Mengatur border luar tabel
        $tableStyle = array(
            'borders' => array(
                'outline' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ),
            ),
        );
        $lastRow = $objPHPExcel->getActiveSheet()->getHighestRow();
        $lastColumn = $objPHPExcel->getActiveSheet()->getHighestColumn();
        $objPHPExcel->getActiveSheet()->getStyle('A1:' . $lastColumn . $lastRow)->applyFromArray($tableStyle);
        
        // Mengatur border vertikal dan horizontal pada seluruh area dengan data
        $lastRow = $objPHPExcel->getActiveSheet()->getHighestRow();
        $lastColumn = $objPHPExcel->getActiveSheet()->getHighestColumn();
        $cellRange = 'A2:' . $lastColumn . $lastRow;
        $objPHPExcel->getActiveSheet()->getStyle($cellRange)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);



        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
    }
}
