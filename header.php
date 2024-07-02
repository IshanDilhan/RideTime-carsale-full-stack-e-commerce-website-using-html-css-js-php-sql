 <?php
    session_start();
    ob_start();
    require_once('db_connector.php');



    ?>
    


 <!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

     <title>RIDE TIME Car Sale</title>

     <link rel="icon" href="assets/images/RIDE TIME.png">
     

     <link rel="stylesheet" id="site-icon" type="text/css" href="assets/css/bootstrap.min.css">

     <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

     <link rel="stylesheet" href="assets/css/style.css">
     <meta name="google-site-verification" content="7PMkBWWNs_rcAhU45LBdgrhPmghJ3k5CCt0lrt_z_Sw" />
     <style>
        /* Default styles for the logo */
img#car-dealer-logo {
  height: 100px;
  margin-left: -100px;
}

/* Media query for small screens (adjust the breakpoint as needed) */
@media (max-width: 768px) {
  /* Hide the logo on small screens */
  img#car-dealer-logo {
    display: none;
  }
  .text-for-small-screens {
      /* display: none; */
      font-size: 27px;
      margin-left: -20px;
      
    }


   
}
@media (min-width: 768px) {
  /* Hide the logo on small screens */
  img#car-dealer-logo {
    //display: none;
  }
  .text-for-small-screens {
      /* display: none; */
      font-size: 27px;
      margin-left: -20px;
      
    }
.menu-trigger1 {
  width: 800px; /* You can adjust the pixel value to your desired width */
  /* Other styles for your .menu-trigger element */
}

   
}
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5023542624997520"
     crossorigin="anonymous"></script>

</style>
  <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>   

 </head>

 <body>

     <!-- ***** Preloader Start ***** -->
     <div id="js-preloader" class="js-preloader">
         <div class="preloader-inner">
             <span class="dot"></span>
             <div class="dots">
                 <span></span>
                 <span></span>
                 <span></span>
             </div>
         </div>
     </div>
     <!-- ***** Preloader End ***** -->


     <!-- ***** Header Area Start ***** -->
     <header class="header-area header-sticky">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <nav class="main-nav">
                         <!-- ***** Logo Start ***** -->
                         <a href="index.php" class="logo" class="text-for-small-screens">
                             <img src="assets/images/RIDE TIME.png" id="car-dealer-logo" alt="Car Dealer Website Logo" style="margin-left: -100px;" height="100px">
                             <span class="text-for-small-screens">RIDE TIME<em> CARSALE</em></span>
                         </a>
                         <!-- ***** Logo End ***** -->
                         <!-- ***** Menu Start ***** -->
                         <ul class="nav">
                         <br>
                             <li><a href="index.php" class="active">Home</a></li>
                             <li><a href="cars.php">Cars</a></li>
                             <li><a href="additems.php">Add Car</a></li>
                             <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                                 <div class="dropdown-menu">
                                     <a class="dropdown-item" href="about.php">About Us</a>
                                     <a class="dropdown-item" href="blog.php">Blog</a>
                                     <a class="dropdown-item" href="team.php">Team</a>
                                     <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                     <a class="dropdown-item" href="faq.php">FAQ</a>
                                     <a class="dropdown-item" href="terms.php">Terms</a>
                                 </div>
                             </li>
                             <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">contact</a>

                                 <div class="dropdown-menu">
                                 <a class="dropdown-item" href="contact.php">Contact</a>
                                 <a class="dropdown-item" href="readcomments.php">Read comments</a>
                                 </div>
                             </li>
                             

                             <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sign in</a>
                                 <ul class="dropdown-menu">
                                     <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) : ?>
                                         <li><a href="logout.php">Logout</a></li>
                                         
                                     <?php else : ?>
                                         <li><a href="register.php">Register</a></li>
                                         <li><a href="login.php">Login</a></li>
                                     <?php endif; ?>
                                 </ul>
                             </li>

                         </ul>
                                                 <a class='menu-trigger menu-trigger1 ' ">
                             <span>Menu</span>
                         </a>
                         <div >
 
  <br>
  <br>
  <br>
  <br>
  <br>
  <br> <br>
  <br>
  <br>
</div>
                         <!-- ***** Menu End ***** -->
                     </nav>
                 </div>
             </div>
         </div>
     </header>