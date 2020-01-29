<!DOCTYPE html>
<?php
include 'config.php';
$id = $_GET['id'];
$count = $_GET['count'];
++$count;
$sql="UPDATE `images` SET `count` =\"$count\" WHERE id=\"$id\"";
mysqli_query($connect,$sql);
    ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
</head>
<body>
  <a href="index.php"> Вернуться в галерею </a>
  <div>
    <img src="<?=PHOTO.$_GET['photo'] ?>">
  </div>
</body>
</html>
