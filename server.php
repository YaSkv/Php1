<?php
$way = getallheaders();
$end_way = $way["Origin"];
function mat($a, $b, $c){
	if ($c == '+') {
		return $a + $b;
}
	elseif ($c == '-') {
		return $a - $b;
}
	elseif ($c == '*') {
		return $a * $b;
}
	elseif ($c == '/') {
		return $a / $b;
}
}
$znak = $_POST['znak']; 
$f_i = (int)$_POST['first_int']; 
$s_i = (int)$_POST['second_int']; 
if ($znak == '/' && $s_i == 0) {
	$itog = "Ошибка_деления_на_ноль";
	$itog1 = file_get_contents($end_way.'/index.php?itog='.$itog);
	echo $itog1;
}
else {
$itog = mat($f_i,$s_i,$znak);
$itog1 = file_get_contents($end_way.'/index.php?itog='.$itog);

echo $itog1;

}


?>