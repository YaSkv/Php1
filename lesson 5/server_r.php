<?php
include "config.php";
$id = $_POST['id'];
$title = $_POST['title'];
$adress = $_POST['adress'];
$size = $_POST['size'];
$adress_big = $_POST['adress_big'];

//$sql = "insert images set title=$title adress=$adress size=$size where id=$id";
if (($title!=false) && ($adress!=false) && ($size!=false)) {
$sql="INSERT INTO `images` (`id`, `title`, `adress`, `adress_big`, `size`, `count`) VALUES (NULL, \"$title\",\"$adress \",\"$adress_big \" ,$size , '0')";
if(mysqli_query($connect,$sql)){
    echo "Data success updated!";
}
}
else {
	echo "Ошибка: пустые данные";
}

//UPDATE `images` SET `title`="imag",`adress`="big_image'",`size`=0 WHERE 1

