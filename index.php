<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $welcome_message = "Welcome, $username!";
} else {
    $welcome_message = "Unleash the Power of Electronics with Us!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantum Hub</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- font links -->
</head>
<body>
    
    <!-- top navbar -->
    <div class="top-navbar">
        <p><?php echo $welcome_message; ?></p>
        <div class="icons">
            <?php
            if (isset($_SESSION['username'])) {
                echo '<a href="logout.php"><img src="img/logout-svgrepo-com.svg" alt="" width="18px">Logout</a>';
            } else {
                echo '<a href="login.php"><img src="img/login-svgrepo-com.svg" alt="" width="18px">Login</a>';
                echo '<a href="register.php"><img src="img/login-svgrepo-com.svg" alt="" width="18px">Register</a>';
            }
            ?>
        </div>
    </div>
    <!-- top navbar -->

     <!-- navbar -->
     <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="logo"><span id="span1">Q</span>uantum<span id="span2">Hub</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="img/menu-svgrepo-com (1).svg" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Products</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(7,0,86);">
                  <li><a class="dropdown-item" href="#">Smartphones</a></li>
                  <li><a class="dropdown-item" href="#">TV</a></li>
                  <li><a class="dropdown-item" href="#">Laptops</a></li>
                  <li><a class="dropdown-item" href="#">Camera</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Acessories</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Contact</a>
              </li>
            </ul>
            <form class="d-flex" id="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- navbar -->





    <!-- home content -->
    <section class="home">
      <div class="content">
        <h1><span>Electronics Products</span>
          <br>
        Up To <span id="span2">50% </span>OFF
        </h1>
        <p>Power Up Your Savings: Unleash the Deals,
        <br> Enjoy Up To 50% OFF on Electronics Products!
        </p>
        <div class="btn"><button>Shop Now</button></div>

      </div>
      <div class="img">
        <img src="img/image1.png" alt="">
      </div>
    </section>
    
    <!-- home content -->

    <!-- product cards -->
    <div class="container" id="product-cards">
      <h1 class="text-center">TOP PRODUCTS</h1>
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
             <img src="img/Apple-iPhone-15-Pro-lineup-hero-230912_Full-Bleed-Image.jpg.large.jpg" height="150px">
               <div class="card-body">
                <h3 class="text-center">iPhone 15 pro</h3>
                <p class="text-center">Elevating Innovation, Redefining Excellence.</p>
               <div class="star text-center">
                 <i class="fa-solid fa-star checked"></i>
                 <i class="fa-solid fa-star checked"></i>
                 <i class="fa-solid fa-star checked"></i>
                 <i class="fa-solid fa-star checked"></i>
                 <i class="fa-solid fa-star checked"></i>
               </div>
               <h2>From $999 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
           </div>
         </div>
       </div>
       <div class="col-md-3 py-3 py-md-0">
        <div class="card">
           <img src="img/15.jpg" height="150px">
             <div class="card-body">
              <h3 class="text-center">iPhone 15</h3>
              <p class="text-center">Unleash the Future:Where Innovation Meets Elegance.</p>
             <div class="star text-center">
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
             </div>
             <h2>From $799<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
         </div>
       </div>
     </div>
     <div class="col-md-3 py-3 py-md-0">
      <div class="card">
         <img src="img/ultra.jpg" height="150px">
           <div class="card-body">
            <h3 class="text-center">Watch Ultra 2</h3>
            <p class="text-center">Elevate Every Moment, Redefine Your Lifestyle.</p>
           <div class="star text-center">
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
           </div>
           <h2>From $799 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
       </div>
     </div>
   </div>

   <div class="col-md-3 py-3 py-md-0">
    <div class="card">
       <img src="img/mac.jpg" height="150px">
         <div class="card-body">
          <h3 class="text-center">MacBook Pro</h3>
          <p class="text-center">Inspiring Creativity, Redefining Pro Performance.</p>
         <div class="star text-center">
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
         </div>
         <h2>From $1599 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
     </div>
   </div>
 </div>
 
     </div>
     <div class="row" style="margin-top: 30px;">
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
           <img src="img/24ultra.jpg" height="150px">
             <div class="card-body">
              <h3 class="text-center">Samsung Galaxy S24 Ultra</h3>
              <p class="text-center">Elevate Your Mobile Experience, Unleash the Future of Innovation.</p>
             <div class="star text-center">
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
             </div>
             <h2>From $999 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
         </div>
       </div>
     </div>
     <div class="col-md-3 py-3 py-md-0">
      <div class="card">
         <img src="img/neo.avif" height="150px">
           <div class="card-body">
            <h3 class="text-center">Neo QLED 8K Smart TV</h3>
            <p class="text-center">Immerse Yourself in Brilliance, Define the Future of Entertainment.</p>
           <div class="star text-center">
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
           </div>
           <h2>From $1199<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
       </div>
     </div>
   </div>
   <div class="col-md-3 py-3 py-md-0">
    <div class="card">
       <img src="img/3p.jpg" height="150px">
         <div class="card-body">
          <h3 class="text-center">Galaxy Book3 Ultra</h3>
          <p class="text-center">Redefining Boundaries, Empowering Your Productivity Journey.</p>
         <div class="star text-center">
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
         </div>
         <h2>From $3199 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
     </div>
   </div>
 </div>
 <div class="col-md-3 py-3 py-md-0">
  <div class="card">
     <img src="img/buds.avif" height="150px">
       <div class="card-body">
        <h3 class="text-center">Samsung Galaxy Buds2 Pro</h3>
        <p class="text-center">Elevate Every Beat, Immerse in Pro Sound Excellence.</p>
       <div class="star text-center">
         <i class="fa-solid fa-star checked"></i>
         <i class="fa-solid fa-star checked"></i>
         <i class="fa-solid fa-star checked"></i>
         <i class="fa-solid fa-star checked"></i>
         <i class="fa-solid fa-star checked"></i>
       </div>
       <h2>From $239 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
   </div>
 </div>
</div>
   </div>
  
    <!-- product cards -->


    <!-- other card -->
    <div class="container" id="other-cards">
      <div class="row">
        <div class="col-md-6 py-3 py-md-0">
          <div class="card" style="align-items: end;">
            <img src="img/2020-airpods-max-hero-2048x1152_large-removebg-preview.png" height="300px">
            <div class="card-img-overlay">
              <h3>Apple</h3>
              <h5>Airpods Max</h5>
              <p>Pure Sound</p>
              <button id="shopnow">Shop Now</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
          <div class="card" style="align-items: end;">
            <img src="img/why_watch__cl5nh99ngyvm_large-removebg-preview.png" height="300px">
            <div class="card-img-overlay">
              <h3>Apple</h3>
              <h5>Watch SE</h5>
              <p>Glance</p>
              <button id="shopnow">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- other card -->


    <!-- banner -->
    <section class="banner">
      <div class="content">
        <h1><span>Electronics Appliances</span>
          <br>
        Up To <span id="span2">50% </span>OFF
        </h1>
        <p>Power Up Your Savings: Unleash the Deals
        <br>Exclusive Tech Delights!
        </p>
        <div class="btn"><button>Shop Now</button></div>

      </div>
      <div class="img">
        <img src="img/520-5208848_samsung-min-electronics-hd-png-download-removebg-preview.png" alt="">
      </div>
    </section>
    <!-- banner -->



    <!-- product-cards -->
    <div class="product-cards">
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
             <img src="img/download-removebg-preview (1).png" height="220px">
               <div class="card-body">
                <h3 class="text-center">LG REFRIGIRATOR</h3>
                <p class="text-center">Cool Innovation, Fresh Living</p>
               <div class="star text-center">
                 <i class="fa-solid fa-star checked"></i>
                 <i class="fa-solid fa-star checked"></i>
                 <i class="fa-solid fa-star checked"></i>
                 <i class="fa-solid fa-star checked"></i>
                 <i class="fa-solid fa-star checked"></i>
               </div>
               <h2>From $589 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
           </div>
         </div>
       </div>
       <div class="col-md-3 py-3 py-md-0">
        <div class="card">
           <img src="img/1-removebg-preview.png" height="220px">
             <div class="card-body">
              <h3 class="text-center">WASHING MASHINE</h3>
              <p class="text-center">Effortless Clean, Every Spin</p>
             <div class="star text-center">
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
               <i class="fa-solid fa-star checked"></i>
             </div>
             <h2>From $129<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
         </div>
       </div>
     </div>
     <div class="col-md-3 py-3 py-md-0">
      <div class="card">
         <img src="img/download-removebg-preview.png" height="220px">
           <div class="card-body">
            <h3 class="text-center">CANNON CAMERA</h3>
            <p class="text-center">Elevate Every Moment</p>
           <div class="star text-center">
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
             <i class="fa-solid fa-star checked"></i>
           </div>
           <h2>From $239 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
       </div>
     </div>
   </div>
   <div class="col-md-3 py-3 py-md-0">
    <div class="card">
       <img src="img/maxresdefault-removebg-preview.png" height="220px">
         <div class="card-body">
          <h3 class="text-center">PLAY STATION 6G</h3>
          <p class="text-center">Immersive Gaming Redefined</p>
         <div class="star text-center">
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
           <i class="fa-solid fa-star checked"></i>
         </div>
         <h2>From $899 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
     </div>
   </div>
 </div>
    </div>
  </div>

   <!-- product-cards -->

<!-- other cards -->
<div class="container" id="other">
  <div class="row">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="img/other1.png" alt="">
        <div class="card-img-overlay">
          <h3>Home Gadget</h3>
          <p>Latest collection Up To 50% Off</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="img/other2.png" alt="">
        <div class="card-img-overlay">
          <h3>Gaming Gadget</h3>
          <p>Latest collection Up To 50% Off</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="img/other3.png" alt="">
        <div class="card-img-overlay">
          <h3>Electronic Gadget</h3>
          <p>Latest collection Up To 50% Off</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- other cards -->


<!-- offer -->
<div class="container" id="offer">
  <div class="row">
    <div class="col-md-3 py-3 py-md-0">
      <i class="fa-solid fa-cart-shopping"></i>
      <h3>Free Shipping</h3>
      <p>On order over $100</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <i class="fa-solid fa-rotate-left"></i>
      <h3>Free Returns</h3>
      <p>Within 15 days</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <i class="fa-solid fa-truck"></i>
      <h3>Fast Delivery</h3>
      <p>Within Country</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <i class="fa-solid fa-thumbs-up"></i>
      <h3>Big choice</h3>
      <p>Of products</p>
    </div>
  </div>
</div>
<!-- offer -->

<!-- newslater -->
<div class="container" id="newslater">
  <h3 class="text-center">Stay Plugged In: Subscribe for Exclusive Tech Delights!</h3>
  <div class="input text-center">
    <input type="text" placeholder="Enter Your Email..">
    <button id="subscribe">SUBSCRIBE</button>
  </div>
</div>
<!-- newslater -->

    <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Quantum Hub</h3>
              <p>
                USA <br>
                Canada <br>
              </p>
              <strong>Phone:</strong> +1 0000 0000 <br>
              <strong>Email:</strong> cc@quantumhub.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li>
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Product</h4>

             <ul>
              <li><a href="#">PS 6G</a></li>
              <li><a href="#">Laptop</a></li>
              <li><a href="#">Mobile Phone</a></li>
              <li><a href="#">Acessories</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Stay Linked, Stay Updated: Connect with Us Across Social Media for the Latest News and Engaging Content!</p>

              <div class="socail-links mt-3">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            
            </div>

          </div>
        </div>
      </div>
      <hr>
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Quantum Hub</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">Manan Kochar</a>
        </div>
      </div>
    </footer>
    <!-- footer -->

    <a href="#" class="arrow"><i><img src="img/circle-arrow-up-solid (1).svg" alt=""></i></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>