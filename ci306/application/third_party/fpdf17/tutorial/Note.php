<?php
    require('../fpdf.php');

    class PDF extends FPDF
    {
        function LoadData($file)
        {
            // Lecture des lignes du fichier
            $lines = file($file);
            $data = array();
            foreach($lines as $line)
                $data[] = explode(';',trim($line));
            return $data;
        }
        function ImprovedTable($header, $data)
        {
            // Largeurs des colonnes
            $w = array(40, 60, 30, 30, 30);
            // En-tête
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7,$header[$i],1,0,'C');
            $this->Ln();
            // Données
            foreach($data as $row)
            {
                $this->Cell($w[0],6,$row[0],'LR', 0, 'C');
                $this->Cell($w[1],6,$row[1],'LR', 0, 'R');
                $this->Cell($w[2],6,number_format($row[2],0,',',' '),'LR',0,'C');
                $this->Cell($w[3],6,number_format($row[3],0,',',' '),'LR',0,'C');
                $this->Cell($w[4],6,$row[4],'LR', 0, 'C');
                $this->Ln();
            }
            // Trait de terminaison
            $this->Cell(array_sum($w),0,'','T');
        }
    }

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->Image('ITU.png',15,2,55,0,'','http://www.fpdf.org');

    $pdf->SetFont('Times','B',13);
    $pdf->SetX(135);
    $pdf->SetTextColor(141, 141, 141);
    $pdf->Cell(0,5,'Annee universitaire 2022-2023');

    $pdf->SetFont('Times','B',15);
    $pdf->SetX(60);
    $pdf->SetTextColor(41, 98, 125);
    $pdf->Cell(40,45,'RELEVE DE NOTES ET RESULTAT');

    $pdf->SetFont('Arial','',12);
    $pdf->SetTextColor(0,0,0);

    $pdf->SetX(15);
    $pdf->Cell(40,70,'Nom:');
    $pdf->SetX(45);
    $pdf->Cell(40,70,'RAMAROSON');

    $pdf->SetX(15);
    $pdf->Cell(40,85,'Prenom(s):');
    $pdf->SetX(45);
    $pdf->Cell(40,85,'Andrivola Fanambony Benjamina');

    $pdf->SetX(15);
    $pdf->Cell(40,100,'Ne le:');
    $pdf->SetX(45);
    $pdf->Cell(40,100,'19/02/2002');

    $pdf->SetX(75);
    $pdf->Cell(40,100,'a:');
    $pdf->SetX(80);
    $pdf->Cell(40,100,'Ambohijanahary');

    $pdf->SetX(15);
    $pdf->Cell(40,115,'N d`inscription:');
    $pdf->SetX(45);
    $pdf->Cell(40,115,'ETU 002023');

    $pdf->SetX(15);
    $pdf->Cell(40,130,'Inscrit en:');
    $pdf->SetX(45);
    $pdf->Cell(40,130,'S4-Informatique');

    $pdf->SetX(15);
    $pdf->Cell(40,145,'a obtenu les notes suivantes:');

    $header = array('UE', 'Intitule', 'Credits', 'Note/20', 'Resultat');
    $data = $pdf->LoadData('Note.txt');
    $pdf->SetFont('Arial','',10);
    $pdf->AddPage();
    $pdf->ImprovedTable($header,$data);

    $pdf->Output();
?>