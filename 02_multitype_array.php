<?php
include("./header.php");
//02_multitype_array
//content
$multitype = array(20,3.14,'A',"Bob");
for($i = 0; $i<4; $i++)
	print($multitype[$i]."<br>");
	//pre 소스코드에 있는거 그대로 
	//클래스는 부트스트랩을 이용한 꾸밈
?>
<pre class="bg-danger text-white">
<?=print_r($multitype);?>
</pre>

<pre class="bg-warning text-white">
<?=print_r($_GET);?>
</pre>
<?php
include("./footer.php");
?>