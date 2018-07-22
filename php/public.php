<?php
	header("Access-Control-Allow-Origin:*");//表示任何域下都可以访问
	header("content-type:text/html;charset=utf-8");
	//1--确定数据源
	$pp = mysql_connect("localhost","root","root");//返回选择的数据源
	//2--选择数据库
	mysql_select_db("h51803",$pp);//确定那个主机下的数据库    第一个参数：数据库  第二个参数:主机名
	//3--确定字符编码  防止乱码
	mysql_query("set names utf8");
?>