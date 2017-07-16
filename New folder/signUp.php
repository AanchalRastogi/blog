<!DOCTYPE html>

<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
 <div class="container">
        

<body background="276565.jpg">


<form action="insert.php" method="post" style="padding-top:134px;padding-right:150px">
<div class="container">
    <div class="card card-container">
		<div class="col-md-4" style="width:96.333333%;color:white;font-size:20px">
			<table align = "center">
			<tr>
				<th align="center" colspan="2" style="color:#01fcff">Registration Form</th>
				
			</tr>
			<tr>
				<td align="center">Name</td>
				<td><input class="form-control" placeholder="Name"type="text" name="name" required ><td>
			</tr>
			
			<tr>
				<td align="center">Email</td>
				<td><input class="form-control" placeholder="Email address"type="email" name="email" required ><td>
			</tr>
			<tr>
				<td align="center">Password</td>
				<td><input class="form-control" placeholder="Password"type="password" name="password" required ><td>
			</tr>
			<tr>
				<td align="center">Re-password</td>
				<td><input class="form-control" placeholder="Re-Password"type="password" name="Re-password" required ><td>
			</tr>
			<tr>
				
				<td align="center" colspan="2"><input class="btn btn-lg btn-primary btn-block btn-signin"type="submit" name="sub" value="submit here"><td>
			</tr>

			</table>
		</div>
	</div>

	</form>
	<script>  
function validateEmail(sEmail) {
var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if (filter.test(sEmail)) {
return true;
}
else {
return false;
}
}

function validateName(name) {
var filter = /^[a-zA-Z\.\ ]+$/;
if (filter.test(name)) {
return true;
}
else {
return false;
}
}

function validateform(){  
var fname=document.form.name.value;  
var email=document.form.email.value;
var password=document.form.password.value; 
var password=document.form.Re-Password.value; 

  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if (!validateName(name))
{
	alert ("Invalid First name(Only characters).");
	return false;
}
else if(name.length<3){  
  alert("Name must be at least 3 characters long.");  
  return false;  
} 


else if (email==null || email==""){  
  alert("Email can't be blank");  
  return false;  
} 
else if (!validateEmail(email))
{
	alert ("Invalid email.");
	return false;
}
else if (!validateEmail(remail))
{
	alert ("Please re_enter a valid email.");
	return false;
}

else if (password==null || password==""){  
  alert("Fill the password");  
  return false;  
}

else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  } 
 else if(Re-Password != password)
{
	alert("Email is not matching");
	return false;
}

} 
}  
</script>
</body>
</html>