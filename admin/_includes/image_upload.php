<?php
  if(isset($_FILES['file_array'])){

    $name_array = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];

    for($i = 0; $i < ($tmp_name_array); $i++){

      if( move_uploaded_file($tmp_name_array[$i], "../images/$name_array[$i]")){
        echo $name_array[$i]."upload is complete<br>";

      }else{
        echo $name_array[$i]."upload failed<br>";

      }
    }
  }
?>
