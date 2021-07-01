<?php
//04.matrix_add
//매트릭스 = 헹렬
include("./header.php");
$a = array(
	array(3,2,1),
	array(2,1,2),
	array(1,2,3)
);
$b = array(
	array(1,2,3),
	array(2,1,2),
	array(3,2,1)
);
for($i=0; $i<3; $i++)
	for($j=0; $j<3; $j++)
		$c[$i][$j]=$a[$i][$j]+$b[$i][$j];
for($i=0; $i<3; $i++){
	for($j=0; $j<3; $j++)
		print($c[$i][$j]." ");
	print("<br>");
}
include("./footer.php");
?>