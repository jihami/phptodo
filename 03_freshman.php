<?php
//03_freshman.php
$title = "연관배열 : Associated Array";
include("./header.php");
$freshman = array(
	"David" =>  "Computer",
	"Alice"  =>  "Math",
	"Elsa"  =>  "Physics", 
	"Bob"  =>  "Music",
	"Chris" =>  array("Electronics","Design")
);
print($freshman['David']); //키값으로 접근해서 가져옴
$freshman["Bob"] = "Movie";
$freshman["Iu"] = "Sing";
unset($freshman["Elsa"]); //지움
print("<pre class=\"bg-primary text-white\">");
print_r($freshman);
print("</pre>");

include("./footer.php");
?>