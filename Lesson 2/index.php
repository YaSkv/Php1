<?php
//первое задание
$a = (int) -3;
$b = (int) -3;



switch (array($a,$b)) {
	case ($a > 0 && $b > 0): //оба числа положительные
	echo $a-$b;
	break;
	case ($a < 0 && $b < 0): //оба числа отрицательные
	echo $a*$b;
	break;
	case ($a*$b < 0): // числа имеют разные знаки
	echo $a+$b;
	break;
	default: 
	echo "Одно из числе является нулем";
}
echo "</br>";

//Второе задание
$c = rand(0,15);
echo "<hr>";
	switch ($c) {
		case 0:
			echo "0"."</br>";
		case 1:
			echo "1"."</br>";
		case 2:
			echo "2"."</br>";
		case 3:
			echo "3"."</br>";
		case 4:
			echo "4"."</br>";
		case 5:
			echo "5"."</br>";
		case 6:
			echo "6"."</br>";
		case 7:
			echo "7"."</br>";
		case 8:
			echo "8"."</br>";
		case 9:
			echo "9"."</br>";
		case 10:
			echo "10"."</br>";
		case 11:
			echo "11"."</br>";
		case 12:
			echo "12"."</br>";
		case 13:
			echo "13"."</br>";
		case 14:
			echo "14"."</br>";
		case 15:
			echo "15"."</br>";
			break;
		default: 
			echo "Что-то работает не так";
	}
//Третье задание

function sumus($a,$b) {
	return $a+$b;
	}
function ded($a,$b) {
	return $a-$b;
	}
function mul($a,$b) {
	return $a*$b;
	}
function divis($a,$b) {
	return $a/$b;
	}
	
//Четвертое задание
echo "<hr>";

 function mathOperation($arg1, $arg2, $operation) {
	 switch($operation) {
		case $operation == "sumus":
			return sumus($arg1, $arg2);
		break;
		case  $operation == "ded":
			return ded($arg1, $arg2);
		break;
		case  $operation == "mul":
			return mul($arg1, $arg2);
		break;
		case  $operation == "divis":
			return divis($arg1, $arg2);
		break;
	 }
 }
	 echo mathOperation(5,57,"sumus");

//Шестое задание
echo "<hr>";
// Для корректной работы функции необходимо изначально передать функции $val = $result 
	function power($val,$pow,$result) {
		
		if($pow > 1) {
			$result*=$val;
			echo $result." ";
			power($val,--$pow,$result);
			
		}
		return;
	}
	power(2,16,2);
	 

//Седьмое задание
echo "<hr>";
 
 
 function proba() {
	$t1 = date ('H');
	$t2 = date ('i');
	$arrt1 = str_split($t1);
	$arrt2 = str_split($t2);
	if ($t1>4 && $t1<21){
		$text1 = "часов";
	}
	elseif ($arrt1[1] == 1) {
		$text1 = "час";
	}
	elseif ($arrt1[1] >= 2 && $arrt1[1] <= 4) {
		$text1 = "часа";
	}
	else {
	$text1 = "часов";
	}
	
	if ($t2>=5 && $t2<21) {
		$text2 = "минут";
	}
	elseif ($arrt2[1] == 1) {
		$text2 = "минута";
	}
	elseif ($arrt2[1] >= 2 && $arrt2[1] <= 4) {
		$text2 = "минуты";
	}
	else {
		$text2 = "минут";
	}
	
	
	
	return $t1." ".$text1." ".$t2." ".$text2;
	
}
echo proba();
	 ?>

