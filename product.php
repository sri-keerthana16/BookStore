<html>
    <head>
<title>Product page</title>
<link rel="stylesheet" type="text/css" href="s1.css" />
        <link rel="stylesheets" href="font-awesome/css/font-awesome.css">
        <link rel="stylesheets" href="font-awesome/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<style>
			table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
		</style>
</head>
 <body>
 <h1>Products</h1>
	<a href="logout.php" class="n" >
        <button style="margin-top:20px;"  type="button" class="btn btn-warning">logout</button> </a>
	<img class="wave" src="images\Logo1.png">
	<div class="container">
		
		<div class="login-content">
		<div class="scroll">
      <table>
				<tr>
				
					<th style="width:20%;">book_name</th>
					<th style="width:20%;">book_cost</th>
					<th style="width:20%;">book_author</th>
					<th style="width:20%;">desc</th>
                    <th style="width:60%;">pic</th>
					
				</tr>
				<?php
				$con = mysqli_connect("localhost","root","");
                $db=mysqli_select_db($con,'bookazfly');
				session_start();
				$uname=$_SESSION['uname'];
        $query="SELECT * FROM books where username='$uname'";
        $result=mysqli_query($con,$query);
				while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['book_name']; ?></td>
					<td><?php echo $rows['book_cost']; ?></td>
					<td><?php echo $rows['book_author']; ?></td>
					<td><?php echo $rows['desc']; ?></td>
					<td><img src="image/<?php echo $rows['pic']; ?>"></td>
					
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
       
	<a href="proadd.php"> <button style="margin-top:20px;"  type="button" class="btn btn-warning">Add</button> </a> </body>
        </html>