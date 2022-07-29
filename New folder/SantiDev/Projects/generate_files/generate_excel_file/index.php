<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SantiDev|Generate Excel</title>
</head>
<body>
    <header>
        <a href="../../../Projects/index.php">Projects</a>
    </header>
    <h1>Excel Generator</h1>
<?php
    //call autoload.php to acitve library
    require 'vendor/autoload.php';
    //call spreadsheet function from library
    use PhpOffice\PhpSpreadsheet\Spreadsheet;  
   //set the file type calling Xlsx class
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    
    //use PhpOffice\PhpSpreadsheet\IOFactory;
    
    //instance a new object from spreadsheet class
    
    $spreadsheet = new Spreadsheet();
    //allow to use a sheet 
    $sheet = $spreadsheet->getActiveSheet();
    //modify one cell from that sheet
    $sheet->setCellValue('A1', 'Hello World !');
    
    //instanse a new Xlsx object
    
    $writer = new Xlsx($spreadsheet);
    //save the file as
    $writer->save('hello world.xlsx');
    
    echo "Archivo generado en carpeta";
?>
</body>
</html>
