<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <style>
        a {
            text-decoration: none;
            padding: 10px;
            margin-top: 30px;
        }
        
        body {
            background-image: url(images/pic8.webp);
            background-size: 100%;
        }
        
        table {
            padding: 20% 75px 20%;
        }
        
        h1 {
            color: rgb(136, 0, 255);
        }
        
        .Sign {
            border: 2px solid rgb(128, 0, 70);
            border-radius: 5%;
            margin: 0% 30% 5%;
        }
    </style>

</head>

<body>
    <center>
        <h1>SIGNUP FORM</h1>
    </center>
    <form method="POST" class="Sign">
        <table>
            <tr>
                <td>Name</td>
                <td><input type=”text” placeholder="Enter Name" name="name"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Email Address:</td>

                <td><input type=”email” placeholder="Enter Email" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><input type="text" placeholder="Enter Mobile Number" name="mobile"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="Radio" name="Gender" name="m">Male
                    <input type="Radio" name="Gender" name="f">Female</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" placeholder="Enter Password" name="pwd1"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
           
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="sign up"></td>
            </tr>
        </table>

    </form>
</body>

</html>
<?php
if(isset($_POST['submit']))
{
    session_start();

$name=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$email=$_SESSION['email'];
$pwd1=$_POST['pwd1'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'bookazfly');
$sql="INSERT INTO registration (name,email,mobile,gender,pwd1) values('$name','$email','$mobile','$gender','$pwd1')" ;
if(mysqli_query($con,$sql))
{
echo("<h1><center>Registration done successfully</center></h1>");
}
else
{
echo("<h1><center>Sorry there is an error in registration !Please try again.....</center></h1>");
}
header("Location: login.php");
exit();
}
?>    

