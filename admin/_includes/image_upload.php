<?php
include "db.php";
include "image_comp.php";

if (isset($_POST['upload'])) {

    $upload_date = $_POST['upload_date'];



    if(isset($_POST['event'])){

      $category_name = $_POST['event'];


    }else{

      $category_name = $upload_date;

    }


    if (isset($_FILES['file_array'])) {
        $name_array = $_FILES['file_array']['name'];
        $tmp_name_array = $_FILES['file_array']['tmp_name'];
        $type_array = $_FILES['file_array']['type'];
        $size_array = $_FILES['file_array']['size'];
        $error_array = $_FILES['file_array']['error'];


        $name1 = array_values( $name_array)[0];

        if (!is_dir("../images/".$category_name."/")) {
            $makedir = mkdir("../images/".$category_name."/");
            if ($makedir) {
                $cat_query = "INSERT INTO media_category(category_name,category_date, category_image) VALUES('$category_name','$upload_date','$name1')";
                $add_category = mysqli_query($connection, $cat_query);

                if ($add_category) {

                    $get_cat_query = "SELECT * FROM media_category WHERE category_date = '$upload_date'";
                    $select_categories = mysqli_query($connection, $get_cat_query);

                    $count = mysqli_num_rows($select_categories);
                    if ($count > 0) {
                        while ($row = mysqli_fetch_assoc($select_categories)) {

                            $cat_id = $row['id'];
                            $cat_date = $row['category_date'];


                            if($cat_date = $upload_date){}


                            for ($i = 0; $i < count($name_array); $i++) {

                              $name =  $name_array[$i];
                                $upload_query = "INSERT INTO media(media_name,media_category,media_date) VALUES('$name','$cat_id','$cat_date')";
                                $add_images = mysqli_query($connection, $upload_query);
                                if ($add_images) {
                                }else{
                                  // echo "add images failed ". mysqli_error($connection)."<br>";
                                }

                                $folder_image = "../images/".$category_name."/$name";
                                $move =  move_uploaded_file($tmp_name_array[$i], $folder_image );

                                resize_image($folder_image, 200, 200);

                                if ($move ) {

                                    echo "upload is complete"."<br>";
                                } else {
                                    echo "upload failed"."<br>";

                                }
                            }
                        }
                    }else{
                      // echo "select category failed". mysqli_error($connection)."<br>";
                    }

                }else{
                  // echo "add category failed".mysqli_error($connection)."<br>";
                }

            } else {
                echo "Directory creation failed<br>";
            }

    }
  }
}
?>
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
