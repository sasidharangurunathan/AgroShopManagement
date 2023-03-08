<?php
    require('fpdf17/fpdf.php');
    
    $conn=mysqli_connect("localhost","root","","invoicedb");



    $pdf = new FPDF('p','mm','A4');

    $pdf->AddPage();

    $pdf->SetFont('Arial','B',14);

    $pdf->Cell(130 , 5, 'GEMUL APPLIANCES.CO', 0, 0);

    $pdf->Cell(59 , 5, 'INVOICE',0,1);

    $pdf->SetFont('Arial','',12);

    $pdf->Cell(130 ,5,'[Street Address]',0,0);
    $pdf->Cell(59 , 5, '',0,1);

    $pdf->Cell(130 , 5,'[City, Country , Zip]',0,0);
    $pdf->Cell(25 , 5,'Date',0,0);
    $pdf->Cell(34 , 5,'[dd/mm/yyyy]',0,1);







     
?>