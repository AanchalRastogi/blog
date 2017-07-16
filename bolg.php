<!DOCTYPE html>
<?php session_start(); $name = $_SESSION['name']; 
$email=$_SESSION['email'];
?>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">


</style>
<body background="blue-pic-18.jpg"	>
<?php include_once('bloghead.php'); ?>
<div class="container" style="padding-left: 0px">
	<div class="container col-md-12">
		<table align = "center">
			<tr>
			<th align="left" colspan="2" ><h1>Hello <?php echo $name; ?></h1></th>
			</tr><br>
			<tr>
				<td><input type="text" style="width:250px" name="Tittle" placeholder="Write Your Tittle"><td>
			</tr>
			</table>
		<form action="insert.php" method="post">

	<div class="container col-md-12">
					<input type="hidden" name = "email" value="<?php echo $_SESSION['email']?>">
			</table><br>
			<table align = "center">
				<tr>
					 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
					 <textarea class="ckeditor" name="editor1"></textarea>
				</tr>
			</table><br>
			<tr>
				
				<td align="center" colspan="2"><input type="submit" name="save" value="Save"><td>
				<td align="center" colspan="2"><input type="submit" name="publish" value="publish" class="btn-info"><td>
			
			</tr>
		<br>
	


	</form></div>



</body>

</html>