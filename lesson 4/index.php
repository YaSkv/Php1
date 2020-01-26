
<?php
include "header.php";

$imgas = scandir("image/big");

for ($i=0;$i<count($imgas);$i++):?>
<?php
	if($i>1):?> {
		<a href='/image/big/<?=$imgas[$i]?>'> <img src ='image/big/<?=$imgas[$i]?>'></a>
		<?php
			endif;?>
			
			<?php
			endfor;?>




