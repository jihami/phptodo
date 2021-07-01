<?PHP
//fruitdata.php
	$low = $_POST['low'];
	$name = ''; $price = 0;
	$fruit = array ("사 과 " => 10, "배 " => 20, "복 숭 아 " => 30,
			"수 박 " => 40, "감 " => 50, "토 마 토 " => 60,
			"바 나 나 " => 70, "키 위 " => 80, "파 인 애 플 " => 90,
			"대추" => 100);
	print "가 격 이 " .$low. "원   이 하 인   과 일 의   목 록 입 니 다 .";
	echo "<table border=\"1\"><tr><th>이 름 </th><th>가격</th></tr>";
	foreach ($fruit as $name => $price){
		if($price <= $low)
		echo "<tr><td>" .$name. "</td><td>" .$price. "</td></tr>";
	}
	print"</table>";
?>
