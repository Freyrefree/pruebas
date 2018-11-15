<?php
include('libs/phpexcel/PHPExcel.php');

$inputFileType = 'CSV';
$inputFileName = 'testFile.csv';
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);


 $totalRows      = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
// $totalColumns   = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn();

$worksheet = $objPHPExcel->getActiveSheet();
//foreach ($worksheet->getRowIterator() as $row) {
for($numRow=2;$numRow<=$totalRows;$numRow++){

    //$numRow = $row->getRowIndex();
    $nombre = $objPHPExcel->getActiveSheet()->getCell('A'.$numRow)->getValue();
    $aP     = $objPHPExcel->getActiveSheet()->getCell('B'.$numRow)->getValue();
    $aM     = $objPHPExcel->getActiveSheet()->getCell('C'.$numRow)->getValue();

    echo $nombre." ".$aP." ".$aM."<br>";
}


// $worksheet = $objPHPExcel->getActiveSheet();
// foreach ($worksheet->getRowIterator() as $row) {
//     //echo 'Row number: ' . $row->getRowIndex() . "\r\n";

//     $cellIterator = $row->getCellIterator();
//     $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
//     foreach ($cellIterator as $cell) {
//         if (!is_null($cell)) {
//             $rango = $cell->getCoordinate() ."\r\n";
//         }
//     }
// }

// $data = $rango;


?>