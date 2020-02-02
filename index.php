<html>
<header>
</header>
<body>
<p>Итог <?=$_GET['itog']?></p>
<form action="server.php" method="post" id="calculate">

<input  type="text"  name="first_int">
<select name="znak"  form="calculate" >
<option selected value="+" >+</option>
<option value="-">-</option>
<option value="*" >*</option>
<option value="/" >/</option>
</select>
<input type="text" name="second_int"></br>
<input type="submit" value="Посчитать">



</form>
</body>
</html>