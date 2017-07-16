<?php
$con=mysqli_connect("localhost","root","","form");
mysql_select_db('form');
if(!$con)
	die ("could not connect database");

