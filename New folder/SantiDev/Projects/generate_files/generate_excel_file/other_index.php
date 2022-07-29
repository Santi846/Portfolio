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
    
   //use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    
    //use PhpOffice\PhpSpreadsheet\Writer\IOFactory;
    //instance a new object from spreadsheet class

    $n_sheet = new Spreadsheet();
    //set instance properties
    $n_sheet->getProperties()->setCreator('Santiago Arocha')->setTitle('My excel');
    //activate for using one sheet 
    $n_sheet->setActiveSheetIndex(0);
    //instance a sheet for using as an active sheet 
    $active_page = $n_sheet->getActiveSheet();

    //set xlsx file font style
    $n_sheet->getDefaultStyle()->getFont()->setName('Calibri');
    //set xlsx file font size
    $n_sheet->getDefaultStyle()->getFont()->setSize(16);

    //set new cells values to active sheet
    $active_page->setCellValue('A1', 'Getting better !')->setCellValue('B1', 'I wanna practise more !')->setCellValue('A2', 'PI number')->setCellValue('B2', 3.14);     

    //set properties for active sheet 

    $active_page->getColumnDimension('A')->setWidth(20);
    $active_page->getColumnDimension('B')->setWidth(50);
    /*
    $writer = new Xlsx($n_sheet);
    
    $writer->save('My Excel.xlsx');
    */
    //return a message while working the generator file successfully
    //with an HTTP Header
    /* Here there will be some code where you create $spreadsheet */

    

    // redirect output to client browser
    
    header('Content-Disposition: attachment;filename="myfile.xls"');
    header('Content-Type: application/vnd.ms-excel');
    header('Cache-Control: max-age=0');
    
    
    
    

    ?>
    
</body>
</html>