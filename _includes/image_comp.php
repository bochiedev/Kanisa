<?php



function resize_image($file, $width, $height)
{
    list($w, $h) = getimagesize($file);
    /* calculate new image size with ratio */
    $ratio = max($width/$w, $height/$h);
    $h = ceil($height / $ratio);
    $x = ($w - $width / $ratio) / 2;
    $w = ceil($width / $ratio);
    /* read binary data from image file */
    $imgString = file_get_contents($file);
    /* create image from string */
    $image = imagecreatefromstring($imgString);
    $tmp = imagecreatetruecolor($width, $height);
    imagecopyresampled(
        $tmp,
        $image,
    0,
        0,
    $x,
        0,
    $width,
        $height,
    $w,
        $h
    );
    // $destination_img = '../admin/images/2018-05-20/'.$file;
    imagejpeg($tmp, $file, 100);
    /* cleanup memory */
    imagedestroy($image);
    imagedestroy($tmp);
    return $file;
}


// $path = "../admin/images/2018-05-06";
//
// if ($handle = opendir($path)) {
//     while (false !== ($file = readdir($handle))) {
//         if ('.' === $file) continue;
//         if ('..' === $file) continue;
//
//
//         resize_image('../admin/images/2018-05-06/'.$file, 200, 200);
//         // do something with the file
//     }
//     closedir($handle);
// }







//
// /**
//  * Image resize
//  * @param int $width
//  * @param int $height
//  */
// function resize($width, $height){
//   /* Get original image x y*/
//   list($w, $h) = getimagesize($_FILES['image']['tmp_name']);
//   /* calculate new image size with ratio */
//   $ratio = max($width/$w, $height/$h);
//   $h = ceil($height / $ratio);
//   $x = ($w - $width / $ratio) / 2;
//   $w = ceil($width / $ratio);
//   /* new file name */
//   $path = 'uploads/'.$width.'x'.$height.'_'.$_FILES['image']['name'];
//   /* read binary data from image file */
//   $imgString = file_get_contents($_FILES['image']['tmp_name']);
//   /* create image from string */
//   $image = imagecreatefromstring($imgString);
//   $tmp = imagecreatetruecolor($width, $height);
//   imagecopyresampled($tmp, $image,
//     0, 0,
//     $x, 0,
//     $width, $height,
//     $w, $h);
//   /* Save image */
//   switch ($_FILES['image']['type']) {
//     case 'image/jpeg':
//       imagejpeg($tmp, $path, 100);
//       break;
//     case 'image/png':
//       imagepng($tmp, $path, 0);
//       break;
//     case 'image/gif':
//       imagegif($tmp, $path);
//       break;
//     default:
//       exit;
//       break;
//   }
//   return $path;
//   /* cleanup memory */
//   imagedestroy($image);
//   imagedestroy($tmp);
// }
