<?php
	include "public.php";
	$content=$_GET["content"];
	$where=$_GET["where"];
	$idea=$_GET["idea"];
	$id=$_GET["id"];
	$sql="UPDATE `wtable` SET `icontent`='$content',`iwhere`='$where',`idea`='$idea' WHERE `id`='$id'";
	$res=mysql_query($sql);
	if($res){
		echo 1;
	}else{
		echo 0;
	}
?>