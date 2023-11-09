<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<div class="container">
<form method="post" enctype='multipart/form-data'>
    <h1>Add your Book</h1>

    <label for="email"><b>Book Name:</b></label>
    <input type="text" placeholder="Enter Title of the Book" name="title" id="email" required>

    <label for="psw"><b>Author Name:</b></label>
    <input type="text" placeholder="Author Name" name="aut" id="psw" required>

    <label for="psw-repeat"><b>Description:</b></label>
    <input type="text" placeholder="Describe your book" name="des" id="psw-repeat" required>
   
    <label for="psw-repeat"><b>Cost of the book:</b></label>
    <input type="text" name="cost" id="psw-repeat" required>
   
    <input type="file" name="file">
    <input type="submit" class="registerbtn" name="submit" style="font-size:20px;" value="Add">
 
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
     $con = mysqli_connect("localhost","root","");
     $db=mysqli_select_db($con,'bookazfly');
    session_start();
    $_SESSION['title'] = $_POST['title'];
    $_SESSION['aut'] = $_POST['aut'];
    $_SESSION['des'] = $_POST['des'];
    $_SESSION['cost'] = $_POST['cost'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "image/".$filename;  
    $title=$_SESSION['title'];	
    $aut=$_SESSION['aut'];
    $des=$_SESSION['des'];
    $cost=$_SESSION['cost'];
    $uname=$_SESSION['uname'];
    
    $sql = "INSERT INTO `books`(`book_name`, `book_cost`, `book_author`, `desc`, `pic`, `username`) VALUES ('$title','$cost','$aut','$des','$filename','$uname')";
    // Execute query
    mysqli_query($con, $sql);
    if(move_uploaded_file($tempname, $folder)) {
        echo "<script>alert('Data Uploaded Successfully')</script>";
       
    }else{
        echo "<script>alert('Data not Uploaded')</script>";
    }
      
}
?>

