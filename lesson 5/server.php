<?php
include "config.php";
$id = $_POST['id'];
$title = $_POST['title'];
$adress = $_POST['adress'];
$size = $_POST['size'];
$adress_big = $_POST['adress_big'];

//$sql = "insert images set title=$title adress=$adress size=$size where id=$id";
$sql="UPDATE `images` SET `title` =\"$title\", `adress`=\"$adress\",`size`=$size, `adress_big`=\"$adress_big\" WHERE id=\"$id\"";
if(mysqli_query($connect,$sql)){
    echo "Data success updated!";
}
//UPDATE `images` SET `title`="imag",`adress`="big_image'",`size`=0 WHERE 1