<?php
        /*CREAMOS EL PDF*/
        require_once("vendor/autoload.php");
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->addPage();
        $content = '<img src="assets/cv.png" style="width: 700px;">';
        //--> savepdf
        $pdf->writeHTML($content, true, false, true, false, 'J');
        ob_end_clean();
        $pdf->output('cv_orozpe.pdf', "D");
?>