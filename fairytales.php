
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        a {
 /* display: inline-block;*/
  padding: 8px;
  background-color:hotpink;
            text-decoration: none;
            margin: 10px;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px; 
}

div.gallery:hover {
  border: 1px solid #777;
    background: pink;
}

div.gallery img {
  width: 100%;
  height: 250px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BOOKAZFLY</a>&nbsp;&nbsp;&nbsp;
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="D:\PROJECT1\online bookshop\home.html">HOME</a>
              </li>&nbsp;&nbsp;&nbsp;
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">CATEGORIES</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="D:\PROJECT1\online bookshop\cs.html">Computer science</a></li>
                    <li><a class="dropdown-item" href="D:\PROJECT1\online bookshop\arithematic.html">Arithmetic</a></li>
                    <li><a class="dropdown-item" href="D:\PROJECT1\online bookshop\horror.html">Horror</a></li>
                    <li><a class="dropdown-item" href="D:\PROJECT1\online bookshop\mech.html">Mechanical</a></li>
                    <li><a class="dropdown-item" href="D:\PROJECT1\online bookshop\civil.html">Civil</a></li>
                    <li><a class="dropdown-item" href="D:\PROJECT1\online bookshop\electrical.html">Electrical</a></li>
                    <li><a class="dropdown-item" href="D:\PROJECT1\online bookshop\fairytales.html">FairyTales</a></li>
                  </ul>
                </li>&nbsp;&nbsp;&nbsp;
              <li class="nav-item">
                <a class="nav-link" href="#">ARRIVALS</a>
              </li>&nbsp;&nbsp;&nbsp;
              <li class="nav-item">
                <a class="nav-link" href="D:\PROJECT1\online bookshop\ab.html">ABOUT US</a>
              </li>  &nbsp;&nbsp;&nbsp;
              <li class="nav-item">
                  <a class="nav-link" href="D:\PROJECT1\online bookshop\contactus.html">CONTACT US</a>
                </li>
              <li> 
                  <i class="bi bi-search"></i>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   <br>
   <hr>
   <div class="gallery">
    <img src="images\Book 13.jpg" alt="" width="600" height="400">
  <div class="desc">
    Add a description of the image here</div>
    <p align="center" >$98</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>


<div class="gallery">
    <img src="images\Book 12.jpg" alt="" width="600" height="400">
  <div class="desc">Add a description of the image here</div>
  <p align="center" >$78</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>
 
 
  <div class="gallery">
    <img src="images\Book 6.jpg" alt="" width="600" height="400">
  <div class="desc">Add a description of the image here</div>
  <p align="center" >$58</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>


<div class="gallery">
    <img src="images\Book 5.jpg" alt="" width="600" height="400">
  <div class="desc">Add a description of the image here</div>
  <p align="center" >$48</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>

<div class="gallery">
    <img src="images\Book 4.jpg" alt="" width="600" height="400">
  <div class="desc">Add a description of the image here</div>
  <p align="center" >$28</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>

<div class="gallery">
    <img src="images\Book 3.jpg" alt="" width="600" height="400">
  <div class="desc">Add a description of the image here</div>
  <p align="center" >$8</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>

<div class="gallery">
    <img src="images\Book 2.jpg" alt="" width="600" height="400">
  <div class="desc">Add a description of the image here</div>
  <p align="center" >$83</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>

<div class="gallery">
    <img src="images\Book 1.jpg" alt="" width="600" height="400">
  <div class="desc">Add a description of the image here</div>
  <p align="center" >$80</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>
</body>
</html>