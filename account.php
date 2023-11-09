<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.i{
    width:30%;
    height:30%;
}
</style>
</head>
<body>
<center>
<h2>My Account</h2>
<div class="card">
  <img src="images\profile.svg" alt="Avatar" class="i">
  <div class="container">
  <?php
    
    $con = mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,'bookazfly');
    session_start();
    $uname=$_SESSION['uname'];
    $query="select * from registration where name='$uname'";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        ?>
    <h4><b>Name: <?php echo $row['name']; ?></b></h4> 
    <h4><b>Email: <?php echo $row['email']; ?></b></h4> 
    
    <a href="logout.php"><button>Logout</button></a>
    <a href="dashboard.php"><button>Dashboard</button></a>
  </div><?php
    }?>
</div>
</center>

</body>
</html> 
