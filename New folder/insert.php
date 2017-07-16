<?php session_start();
if(isset($_POST['sub']))
{		
	include("connection.php");
	$name=$_POST['name'];
	$address=$_POST['add'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$Re_pw=$_POST['Re-password'];
	if($password==$Re_pw)
	{
		$query="insert into mst_data(name,address,email,password)values('$name','$address','$email','$password')";
		$Insert=mysqli_query($con,$query);
		if($Insert)
		{	
			
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email; 
			//echo "data insert successfully";
			header("location: bolg.php");
		}
		else
		{
			echo "error";
		}
	}
}
if(isset($_POST['LogIn']))
{
	include("connection.php");
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query="select * from  mst_data where email=$email and password=$password";
		$select=mysqli_query($con,$query);
		if($select)
		{
			header("Location:http://www.google.com");
			echo "data insert successfully";
		}
		else
		{
			echo "error";
		}
}



if(isset($_POST['save']))
{
	include("connection.php");
	$Tittle=$_POST['Tittle'];
	$editor=$_POST['editor1'];
	$email = $_POST['email'];
	$status='1';
	$query="insert into mst_blogs(tittle,blog,status,email)values('$Tittle','$editor','$status','$email')";
		$select=mysqli_query($con,$query);
		if($select)
		{
			
			echo "data insert successfully";
		}
		else
		{
			echo "error";
		}
}
if(isset($_POST['publish']))
{
	include("connection.php");
	$Tittle=$_POST['Tittle'];
	$editor=$_POST['editor1'];
	
	if($status=='1')
	$query="update mst_blogs set blog= '$editor'and status='0' where tittle='$Tittle'";
else
	$query="insert  into mst_blogs (tittle,blog,status,email) values ('$Tittle','$editor','$status','')";
		$update=mysqli_query($con,$query);
		if($update)
		{
			
			echo "blog update and published";
		}
		else if($query)
		{
			echo "blog published";
		}
}
if(isset($_POST['list']))
{ 
include("connection.php");
	$ret="select tittle,email from mst_blogs where status='1'";
	$sql=$con->query($ret);
	 while ($rows = mysqli_fetch_array($sql,MYSQLI_ASSOC))
	 {
	
       $tittle = $rows['tittle'];
       
       $email = $rows['email'];
       
       echo "$email<br>$tittle<br><br>";

	 }

}

if()
{



session_start();
$username = $_SESSION['username'];

$con = mysql_connect('localhost','root','password');
mysql_select_db("db");


$profileimage = mysql_query("

SELECT * FROM images WHERE username='$username'

");

$row = mysql_fetch_array($profileimage);
$showimage = $row['imagefile'];
}
?>