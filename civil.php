
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
    <img src="images\c1.png" alt="" width="600" height="400">
  <div class="desc">
  A Handbook for Civil Engineering</div>
  <p align="center" >$90</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>


<div class="gallery">
    <img src="images\c2.png" alt="" width="600" height="400">
  <div class="desc">Civil Engineering State Exams-Previous Year Questions Volume-I</div>
  <p align="center" >$8</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>
 
 
  <div class="gallery">
    <img src="images\c3.png" alt="" width="600" height="400">
  <div class="desc">Civil Engineering: Conventional And Objective Type (2018-19 Session)</div>
  <p align="center" >$5</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>


<div class="gallery">
    <img src="images\c4.png" alt="" width="600" height="400">
  <div class="desc">Civil Engineering Through Objective Type Questions 3Ed</div>
  <p align="center" >$9</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>

<div class="gallery">
    <img src="images\c5.png" alt="" width="600" height="400">
  <div class="desc">EMERGING TRENDS IN CIVIL ENGINEERING Course Code 22603</div>
  <p align="center" >$9</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>

<div class="gallery">
    <img src="images\c7.png" alt="" width="600" height="400">
  <div class="desc">The Sustainable Composite Materials in Civil and Architectural Engineering</div>
  <p align="center" >$9</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>

<div class="gallery">
    <img src="images\Book 7.jpg" alt="" width="600" height="400">
  <div class="desc">Architecture</div>
  <p align="center" >$9</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>

<div class="gallery">
    <img src="images\Book 8.jpg" alt="" width="600" height="400">
  <div class="desc">Civil texture</div>
  <p align="center" >$9</p>
  <center> <a href="payment page.php"><button class="button button5">Buy</button></a></center>
</div>
</body>
</html>