<html>
    <head>
        <meta name="viewport" content="width=device-width ,intial-scale=1.0">
        <title>Contact page</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
        crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="cu_style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
        body{
           background-image:url("D:\PROJECT1\online bookshop\images\pic2.jpg");
           background-color:palegoldenrod;
           background-image: linear-gradient(red, yellow, blue);
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
            <a class="nav-link" href="D:\PROJECT1\online bookshop\home.php">HOME</a>
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
        
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2><hr>
                <p>Online Book store is an online web application where the customer can purchase books online. 
                    Through a web browser the customers can search for a book by its title or author, later can add to the shopping cart 
                    and finally purchase using credit card transaction.</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>
                                    14333 Bangara hills,<br>
                                    Hyderabad,<br>
                                    Telangana
                                </p>
                            </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>
                                  XYZ@gmail.com
                                </p>
                            </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                            <div class="text">
                                <h3>Phone number</h3>
                                <p>
                                  +91 XXXXXXXXXX
                                </p>
                            </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>
                            Send Message
                        </h2>
                        <div class="inputBox">
                            <input type="text" name="">
                             <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="">
                             <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                             <span>Type your Message..</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer class="text-center">
            <center>
              <p>Copyright &copy; 2022 All rights reserved by Bookazfly.</p>
            </center>
          </footer>
    </body>
</html>