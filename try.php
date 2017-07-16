

<!DOCTYPE html  
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Upload Image </title>
<?php 
// if something was posted, start the process... 
if(isset($_POST['upload'])) 
{ 

// define the posted file into variables 
$name = $_FILES['picture']['name']; 
$tmp_name = $_FILES['picture']['tmp_name']; 
$type = $_FILES['picture']['type']; 
$size = $_FILES['picture']['size']; 

// if your server has magic quotes turned off, add slashes manually 
if(!get_magic_quotes_gpc()){ 
$name = addslashes($name); 
} 

// open up the file and extract the data/content from it 
$extract = fopen($tmp_name, 'r'); 
$content = fread($extract, $size); 
$content = addslashes($content); 
fclose($extract);  

// connect to the database 
include "connect.php"; 

// the query that will add this to the database 
$addfile = "INSERT INTO files (name, size, type, content ) VALUES ('$name', '$size', '$type', '$content')"; 
mysql_query($addfile) or die(mysql_error()); 
     if(!empty($_FILES)) 
    { 
        $target = "upload/"; 
        $target = $target . basename( $_FILES['picture']['name']) ; 
        $ok=1; 
        $picture_size = $_FILES['picture']['size']; 
        $picture_type=$_FILES['picture']['type']; 
        //This is our size condition 
        if ($picture_size > 5000000) 
           { 
           echo "Your file is too large.<br>"; 
           $ok=0; 
           } 


        //This is our limit file type condition 
        if ($picture_type =="text/php") 
        { 
            echo "No PHP files<br>"; 
            $ok=0; 
        } 

        //Here we check that $ok was not set to 0 by an error 
        if ($ok==0) 
        { 
            Echo "Sorry your file was not uploaded"; 
        } 

        //If everything is ok we try to upload it 
        else 
        { 
            if(move_uploaded_file($_FILES['picture']['tmp_name'], $target)) 
            { 
                echo "The file ". basename( $_FILES['picture']['name']). " has been uploaded <br/>"; 
            } 
                        else 
                        { 
                            echo "Sorry, there was a problem uploading your file."; 
                        } 
                    } 
                } 


mysql_close();  

echo "Successfully uploaded your picture!";       
}else{die("No uploaded file present"); 
}   

?>
</head>

<body>

 <div align="center"> 
 <img src="upload/<?php echo $name; ?>" 
    <br /> 
    <a href="form.html">upload more images</a> 
</div> 

</body>
</html>
