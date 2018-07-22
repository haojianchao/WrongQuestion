<?php
	include "public.php";
	$id=$_GET["id"];	
	$sql="DELETE FROM `wtable` WHERE `id`='$id'";	
	$res=mysql_query($sql);
	if($res){
		echo 1;
	}else{
		echo 0;
	}
?>