<?php
	$content=$_GET["content"];
	$where=$_GET["where"];
	$idea=$_GET["idea"];	
	include "public.php";
	$sql="INSERT INTO `wtable`( `icontent`, `iwhere`, `idea`) VALUES ('$content','$where','$idea')";
	$res=mysql_query($sql);
	if($res){
		echo 1;
	}else{
		echo 0;
	}
?>