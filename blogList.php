<!DOCTYPE html>
<html>
<?php session_start(); //$name = $_SESSION['name']; $email=$_SESSION['email'];
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="test.css"><script src="jquery.js"></script>
<head>

	<title>BLOG LIST</title>
	
	
	<style type="text/css">
	
</style>
	<script type="text/javascript" src="jquery-3.1.1.js"></script>
	<script type="text/javascript" src="profile.js"></script>
</head>
<body>
<?php include_once('bloghead.php'); ?>
<div id="includedContent"></div>
	<div class="container">
		<form action="insert.php" method="post">
						<div class="row">
								<div class="categories single-widget">
								<table>			
								<tr>
									<a><?php include("connection.php");
	$ret="select tittle,email from mst_blogs where status='1'";
	$sql=$con->query($ret);
	 while ($rows = mysqli_fetch_array($sql,MYSQLI_ASSOC))
	 {
	
       $tittle = $rows['tittle'];
       
       $email = $rows['email'];
       
       echo "$email<br>$tittle<br><br>";

	 }?></a>
								</tr>
								</table>	
								</div>
						</div>
		</form>
	</div>	
</body>
</html>