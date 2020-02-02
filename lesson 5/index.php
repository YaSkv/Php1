<meta charset=utf-8>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
	function f(id){
		var id_image = "image_"+id;
		var id_adress = "image_"+id+"a";
		var id_size = "image_"+id+"s";
		var id_adress_big = "image_"+id+"b";
		
		var title = document.getElementById(id_image).value;
		var size = document.getElementById(id_size).value;
		var adress = document.getElementById(id_adress).value;
		var adress_big = document.getElementById(id_adress_big).value;
		var query = "id="+id+"&title="+title+"&adress="+adress+"&size="+size+"&adress_big="+adress_big;
		$.ajax({
			type: "POST",
			url: "server.php",
			data: query,
			success: function(answer){
				alert(answer);
				
			}
		});

		
	}
	function r(id){
		var id_image = "image_"+id;
		var id_adress = "image_"+id+"a";
		var id_size = "image_"+id+"s";
		var id_adress_big = "image_"+id+"b";
		
		var title = document.getElementById(id_image).value;
		var size = document.getElementById(id_size).value;
		var adress = document.getElementById(id_adress).value;
		var adress_big = document.getElementById(id_adress_big).value;
		var query = "id="+id+"&title="+title+"&adress="+adress+"&size="+size+"&adress_big="+adress_big;
		$.ajax({
			type: "POST",
			url: "server_r.php",
			data: query,
			success: function(answer){
				alert(answer);
				
			}
		});

		
	}
	
</script>


<?php
include "config.php";
$sql = "select * from images";

$res = mysqli_query($connect,$sql);

$form = "<table style='margin: 0 auto;text-align:center;' border='1' width='400'>";

while($data = mysqli_fetch_array($res)){
	$form.="<tr><td>".$data['id']."</td><td><input id='image_".$data['id']."' type='text' value=".$data['title']."></td>";
	$form.="<td><input id='image_".$data['id']."a"."' type='text' value=".$data['adress']."></td>";
	$form.="<td><input id='image_".$data['id']."b"."' type='text' value=".$data['adress_big']."></td>";
	$form.="<td><input id='image_".$data['id']."s"."' type='text' value=".$data['size']."></td>";
	$form.="<td><input onclick='f(".$data['id'].")' type='button' value='Сохранить'></td>";
	$form.="<td><input onclick='r(".$data['id'].")' type='button' value='Добавить в таблицу'></td></tr>";
	
}
$form .="</table>";

echo $form;
$img = "<div style='display:block; text-align:center;'>" ;
$res1 = mysqli_query($connect,$sql);
 while($data1 = mysqli_fetch_array($res1)) { 
$img.="<a href=image.php?photo=".$data1['title']."&id=".$data1['id']."&count=".$data1['count']."><img src=".$data1['adress'].$data1['title']."></a>";
$img.= "<p>Число просмотров ".$data1['count']."</p>";
 } 
 $img.="</div>";
echo $img;
