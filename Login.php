<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<style>
    body {
        background-image: url(images/pic10.jpg);
        margin: 120px;
    }
    
    form {
        border-radius: 10px;
        margin: 10px 20px 30px 10px;
        color: rgb(15, 0, 223);
    }
    
    p,
    a {
        color: rgb(183, 0, 255);
    }
    
    table {
        padding: 15% 10px 15%;
    }
    
    .Login {
        border: 2px solid rgb(128, 68, 0);
        border-radius: 10%;
        margin: 0% 30% 5%;
    }
</style>

<body>

    <center>
        <form method="POST" class="Login">
            <table>
                <tr>
                    <td>
                        User name:
                    </td>

                    <td>
                        <input type="text" placeholder="Enter your name:" name="uname">
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <td>
                    Password:
                </td>

                <td>
                    <input type="password" placeholder="Enter your password:" name=pwd">
                </td>
                </tr>
            </table>
            <input type="submit" name="check" value="login"> 
     
        
        <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
        </form>
    </center>



</body>

</html>
<?php
   if (isset($_POST['check']))
{
    session_start();
    $con = mysqli_connect("localhost","root","");
 $db=mysqli_select_db($con,'bookazfly');
 $_SESSION['uname'] =$_POST['uname'];
 $_SESSION['pwd'] =$_POST['pwd'];
 $uname=$_SESSION['uname'];
 $pwd=$_SESSION['pwd'];
 $sql ="select * from registration where name='$uname'";
 $res = mysqli_query($con,$sql);
if ($res)
{

/*echo '<script> window.open('home.php','_top')</script>';*/
header("Location: home.php");
}
else
{
echo '<h3><center>Login failed. Invalid username or password</center></h3>';
}
}
?>
