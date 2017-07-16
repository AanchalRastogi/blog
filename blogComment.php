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
				
				<td align="center" colspan="2"><input type="submit" name="save" value="Save" class="btn btn-primary"><td>
				<td align="center" colspan="2" ><input type="submit" name="publish" value="publish" style="background-color:#31D536 !important" class="btn btn-info"><td>
			
			</tr>
			<br>
		</form>
	</div>
</div>
<div class="container" style="padding-left: 0px">
	<div class="container col-md-12">
	<div class="leave-comment">
        <h3 class="leave-comment-text">Write a comment</h3>
            <form id="blog-comment" action="#">
                <div class="row">
					<div class="col-md-6">
                        <div class="leave-form">
                            <input placeholder="Name*" type="text">
                        </div>
                    </div>
					<div class="col-md-6" style="margin-right: 1082px">
                        <div class="leave-form" style="boader-color:#101b52">
                            <input placeholder="Email*" type="text">
                        </div>
                    </div>
                    <div class="col-md-12">
                                            <div  style="width:150px">
                                                <textarea placeholder="Comment*" style="width: 500px"></textarea>
                                                <button class="comment-submit btn btn-primary">Send Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div
	</div>



</body>

</html>