<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'third_party/fpdf17/fpdf.php';

class PdfController extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function exportToPdf() {
        $data = array(
            'title' => 'Mon PDF',
            'content' => 'Contenu du PDF'
        );

        $pdf = new FPDF();

        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 16);

        $pdf->Cell(0, 10, $data['title'], 0, 1, 'C');

        $pdf->SetFont('Arial', '', 12);

        $pdf->MultiCell(0, 10, $data['content']);

        $pdf->Output("mon_pdf.pdf", "D");
    }
}
