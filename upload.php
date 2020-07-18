<?php
$dataNames=$_FILES['fileuploader']['name'];
$dataTmps=$_FILES['fileuploader']['tmp_name'];
$dataSizes=$_FILES['fileuploader']['size'];
$dataTypes=$_FILES['fileuploader']['type'];
$dataTypeArray=['image/png','image/gif'];
$data='';
for($i=0;$i<count($dataNames);$i++){

    for($i=0;$i<count($dataSizes);$i++){
        if($dataSizes[$i]<1000000 && in_array($dataTypes[$i],$dataTypeArray) ){
            move_uploaded_file($dataTmps[$i],$dataNames[$i]);
        }
        else{
            echo  "$dataNames[$i]</br>";


        }
    }

}
         echo 'Fayllari gosteriler parametrlere uygun degildir';


?>