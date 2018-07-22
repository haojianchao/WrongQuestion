<?php
	include "public.php"; 
	$sql="SELECT * FROM `wtable`";
	$res=mysql_query($sql);
	while($result=mysql_fetch_array($res)){
		$arr[]=$result;
	}
	echo json_encode($arr);
?>