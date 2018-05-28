<?php
  if(isset($_FILES['file_array'])){

    $name_array = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];

    for($i = 0; $i < count($tmp_name_array); $i++){

      if( move_uploaded_file($tmp_name_array[$i], "../images/$name_array[$i]")){
        echo $name_array[$i]."upload is complete<br>";

      }else{
        echo $name_array[$i]."upload failed<br>";

      }
    }
  }

// $uploaded = count($name_array);
// for ($i=0;$i<$uploaded;$i++) {
// $file_array = array(
//   'name' => $_FILES['file_array']['name'][$i],
//   'tmp_name' => $_FILES['file_array']['tmp_name'][$i],
//   'type' => $_FILES['file_array']['type'][$i],
//   'size' => $_FILES['file_array']['size'][$i],
//   'error' => $_FILES['file_array']['error'][$i],
// 'name'      => $_FILES['file_array']['name'][$i],
// 'type'      => $_FILES['file_array']['type'][$i],
// 'tmp_name'  => $_FILES['file_array']['tmp_name'][$i],
// 'error'     => $_FILES['file_array']['error'][$i],
// 'size'      => $_FILES['file_array']['size'][$i]
// );
// }

?>
