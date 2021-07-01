<?php
include("header.php");
$mysql_host = "localhost";
$mysql_user = "hami0825"; 
$mysql_pw = ""; 
$mysql_db = "hami0825"; 

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pw, $mysql_db);
mysqli_select_db($conn, $mysql_db) or die ("DB 선택 실패");
$limit = 5;
$sql = "select * from `todos` order by `idx` limit ".$limit;
//$sql = "select * from `todos` order by `idx` desc limit ".$limit;
//php 연결연산자 -> . 임 자바는 +임
$rs = mysqli_query($conn, $sql);
$todos = "";
while($row = mysqli_fetch_array($rs)){
	if($row['complete'] ==1){
		$complete = '<span class = "badge bg-success">완료</span>';
	}else{
		$complete = '<span class = "badge bg-danger">미완료</span>';
	}
	//print_r($row); //row -> 행 할때 그 로우
	$todos .='<tr><th scope="row">'.$row['idx']
			 .'</th><td>'.$row['title']
			 .'</th><td>'.$row['wdate']
			 .'</td><td>'.$complete.'<td/></tr>';
}
?>

<table class='table'>
	<thead>
		<tr>
			<td scope='col'>#</th>
			<td scope='col'>할일</th>
			<td scope='col'>등록 시간</th>
			<td scope='col'>완료여부</th>
		</tr>
	</thead>
	<tbody>
		<?=$todos?>
	</tbody>
</table>
<?php
include('footer.php');
?>
