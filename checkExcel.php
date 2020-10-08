<?php
   require_once "Classes/PHPExcel.php";
   if(isset($_POST["uploadBtn"])){
       $file = $_FILES['fileToUpload'];
    //    print_r($file);
       // store the file name
       $file_name = $_FILES['fileToUpload']['name'];
       //store the temp location
       $file_temp_loc = $_FILES['fileToUpload']['tmp_name'];
       //store into image folder
       $file_store = "images/".$file_name;
       //check the type of file
       $file_type = $_FILES['fileToUpload']['type'];
    //    print $file_type;
   
       if($file_type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'){
           if (move_uploaded_file($file_temp_loc, $file_store)) {
                //    $file = $_FILES['fileToUpload'];
                $path = $file_store;
   
                $reader = PHPExcel_IOFactory::createReaderForFile($path);
                $excel_obj = $reader->load($path);
   
                $worksheet =$excel_obj->getSheet('0');
   
                $lastRow = $worksheet->getHighestRow();
                $colomncount = $worksheet->getHighestDataColumn();
   
                $colomncount_number= PHPExcel_Cell::columnIndexFromString($colomncount); 
   
                echo "<table class='table-bordered mt-4 ml-4'>";
                for($row=1;$row<=$lastRow;$row++){
                    echo "<tr>";
                    for($col=0;$col<$colomncount_number;$col++){
                        echo "<td>";
                        echo $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col).$row)->getValue();
                        echo "</td>";
                    }
                    echo "</tr>";
                }	
                echo "</table>";
            } 
        }
        else{
           echo "file not display";
        }
    }
?>