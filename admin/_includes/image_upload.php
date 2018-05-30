<?php

include "db.php";
if (isset($_POST['upload'])) {
    $upload_date = $_POST['upload_date'];
    echo  $upload_date."<br>" ;


    if (isset($_FILES['file_array'])) {
        $name_array = $_FILES['file_array']['name'];
        $tmp_name_array = $_FILES['file_array']['tmp_name'];
        $type_array = $_FILES['file_array']['type'];
        $size_array = $_FILES['file_array']['size'];
        $error_array = $_FILES['file_array']['error'];

        for ($i = 0; $i < count($tmp_name_array); $i++) {

          $name =  $name_array[1];
          echo $name;
        }




        if (!is_dir("../images/".$upload_date."/")) {
            $makedir = mkdir("../images/".$upload_date."/");
            if ($makedir) {


                $cat_query = 'INSERT INTO media_category(id,category_date, category_image) VALUES("", {$upload_date},{$name})';
                $add_category = mysqli_query($connection, $cat_query);

                $get_cat_query = "SELECT * FROM media_category WHERE category_date = $upload_date";
                $select_categories = mysqli_query($connection, $get_cat_query);

                while ($row = mysqli_fetch_assoc($select_categories)) {
                    $cat_id = $row['id'];
                    echo $cat_id;
                }


                for ($i = 0; $i < count($tmp_name_array); $i++) {
                  echo $name_array[$i];
                    $upload_query = 'INSERT INTO media(id,media_name,media_category,media_date) VALUES("",{$name_array[$i]},{$cat_id},{$upload_date})';
                    $add_images = mysqli_query($connection, $upload_query);
                    if ($add_images) {
                        echo $name_array[$i];
                    }else{
                      echo mysqli_error($connection);
                    }
                    $move =  move_uploaded_file($tmp_name_array[$i], "../images/".$upload_date."/$name_array[$i]");
                }
                if ($move ) {
                    echo "upload is complete";
                } else {
                    echo "upload failed";

                }
            } else {
                echo "Directory failed<br>";
            }
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
