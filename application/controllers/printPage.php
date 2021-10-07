<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// require('./application/third_party/phpoffice/vendor/autoload.php');

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class printPage extends CI_Controller{

	public function __construct(){
		parent::__construct();		
		$this->load->model('m_masterData');
		$this->load->model('m_cek');
	}

	public function printArea(){
		$cek = $this->m_masterData->getArea();
		$dat['area'] = $cek;
		$this->load->view('master_data/area-print', $dat);
	}

	public function printAreaPDF(){
		// Load library
		$this->load->library('pdf');
		$pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
		$pdf->AddPage();
		
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'',0,1,'C');
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,7,'DAFTAR MASTER AREA',0,1,'L');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(190,7,'',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Kode Area',1,0,'C');
        $pdf->Cell(85,6,'NAMA Area',1,1,'C');
        $pdf->SetFont('Arial','',10);
		$cek = $this->m_masterData->getArea();
        foreach ($cek as $row){
            $pdf->Cell(20,6,$row->kode_area,1,0,'C');
            $pdf->Cell(85,6,$row->nama_area,1,1,'C');
        }
        $pdf->Output();
	}

    public function printAreaExcel(){   
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->m_masterData->getArea();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'DAFTAR MASTER AREA');
        $objPHPExcel->getActiveSheet()->SetCellValue('A2', 'Kode Area');
        $objPHPExcel->getActiveSheet()->SetCellValue('B2', 'Nama Area');
        //set Width
        $objPHPExcel->getSheet(0)->getColumnDimension('A')->setWidth(12);
        $objPHPExcel->getSheet(0)->getColumnDimension('B')->setWidth(24);
        // set Row
        $rowCount = 3;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->kode_area);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->nama_area);
            $rowCount++;
        }
        $filename = "cetak-daftar-master-area".".xlsx";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        ob_end_clean();
        $objWriter->save('php://output'); 
	}

    public function printAreaCSV(){  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->m_masterData->getArea();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Kode Area');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Nama Area');
        //set Width
        $objPHPExcel->getSheet(0)->getColumnDimension('A')->setWidth(12);
        $objPHPExcel->getSheet(0)->getColumnDimension('B')->setWidth(24);     
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->kode_area);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->nama_area);
            $rowCount++;
        }
        $filename = "cetak-daftar-master-area".".csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output'); 
    }
    
    public function printKartu(){      
        $nikes = $this->input->post('printNikes');
        $cek['print'] = $this->m_cek->cekDataByNIKES($nikes);
        //print_r($cek);
		$this->load->view('print-kartu-btn', $cek);

    }
}