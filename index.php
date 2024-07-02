<?php
include_once "header.php";

$first_itemQ = "SELECT `car_id`, `car_name`, `car_brand`,`car_status`,`display_price`,`seling_price`,`engine_power`,`km`,`giar_type`,`car_image_url`,`car_is_enable`
FROM `cars` WHERE car_is_enable =1   ORDER BY `car_id` DESC  LIMIT 6";



$firstQ  = $first_itemQ;
$result1 = mysqli_query($con, $firstQ);
$count1  = mysqli_num_rows($result1);

?>


<!-- ***** Preloader Start ***** -->
<!-- <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
<!-- ***** Preloader End ***** -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5023542624997520"
     crossorigin="anonymous"></script>
<amp-auto-ads type="adsense"
        data-ad-client="ca-pub-5023542624997520">
</amp-auto-ads>
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Discover Unbeatable Deals at Our Car Sale!</h6>
            <!-- <h2>Best <em>car dealer</em> in town!</h2> -->
            <h2>Find <em>Your Dream </em>Car Today</h2>
            <div class="main-button">
                <a href="contact.php">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Cars Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <div class="row" style="margin-top: -80px;">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading ">
                    <h2>Featured <em>Cars</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <br>
                    <p1 >Discover handpicked Featured Cars, elegant sedans to powerful SUVs. Exceptional performance,
                        luxurious features-own the ultimate driving experience. Act now!
                    </p1>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            if ($count1 > 0) {

                while ($row = mysqli_fetch_array($result1)) {
            ?>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="<?php echo $row['car_image_url']; ?>" alt="" height="250px" width="100px">
                            </div>
                            <div class="down-content">
                                <span>
                                    <del><sup>$</sup><?php echo $row['display_price']; ?></del> &nbsp; <sup>$</sup><?php echo $row['seling_price']; ?>
                                </span>

                                <h4><?php echo $row['car_name']; ?></h4>

                                <p>
                                    <i class="fa fa-dashboard"></i> <?php echo $row['km']; ?>km &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cube"></i> <?php echo $row['engine_power']; ?> cc &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cog"></i> <?php echo $row['giar_type']; ?> &nbsp;&nbsp;&nbsp;
                                </p>

                                <ul class="social-icons">

                                    <li><a href="car-details.php?car_id=<?php echo $row['car_id']; ?>">+ View Car</a></li>

                                </ul>
                            </div>
                        </div>

                    </div>

            <?php
                }
            } else {
                echo 'No items found...!';
            }

            ?>
        </div>


        <div class="main-button text-center ">
            <a href="cars.php">View Cars</a>
        </div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5023542624997520"
     crossorigin="anonymous"></script>
<!-- ishan -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5023542624997520"
     data-ad-slot="4711700427"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
</section>

<!-- ***** Cars Ends ***** -->
<section class="section section-bg " id="schedule" style="background-image: url(assets/images/blog-image-3-940x460.jpg); height: 600px;">

    <div class="container ">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2>Read <em>About Us</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>Welcome to RIDE TIME Car Sale! We are your trusted destination
                        for premium pre-owned vehicles. With a passion for excellence, we provide top-quality cars,
                        outstanding
                        customer service, and unbeatable deals. Find your dream car with us today!
                    </p>
                    <p>Experience the Ride Time Car Sale difference today and drive away with confidence. Your journey starts here!

                        Feel free to customize and expand upon this "About Us" section to better match the unique selling points and values of your car sale website.
                    </p>
                </div>
            </div>
        </div>
        <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Welcome to our Car Sale! With a deep-rooted passion for cars, we strive to provide an
                            exceptional car buying experience. Our expert team is dedicated to offering top-quality
                            vehicles, outstanding customer service, and unbeatable deals. At our Car Sale, your dream
                            car awaits – let's embark on this thrilling journey togetherwith us today!</p>
                    </div>
                </div>
            </div> -->
    </div>
</section>

<!-- ***** Blog Start ***** -->
<section class="section" id="our-classes" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Read our <em>Blog</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>At Our Car Sale, we offer an extensive selection of top-quality vehicles to fulfill your
                        automotive desires. Whether you seek a sleek sedan, a spacious SUV, or a powerful truck, our
                        diverse inventory has the perfect ride for you.</p>
                </div>
            </div>
        </div>
        <div class="row" id="tabs">
            <div class="col-lg-4">
                <ul>
                    <li><a href='#tabs-1'>Choosing the Right Car for Your Lifestyle</a></li>
                    <li><a href='#tabs-2'>Maintaining Your Car for Peak Performance</a>
                    </li>
                    <li><a href='#tabs-3'>Navigating the Car Financing Mazen
                        </a></li>
                    <div class="main-rounded-button"><a href="blog.php">Read More</a></div>
                </ul>
            </div>
            <div class="col-lg-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                        <h4>Choosing the Right Car for Your Lifestyle</h4>

                        <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                            27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>

                        <p>Keeping your car in top-notch condition is essential for longevity and performance. In this blog, we'll share maintenance tips, best practices, and schedules to ensure your vehicle runs smoothly, saving you money in the long run.F.</p>
                        
                    </article>
                    <article id='tabs-2'>
                        <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                        <h4>Maintaining Your Car for Peak Performance</h4>
                        <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                            27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>
                        <p> Keeping your car in top-notch condition is essential for longevity and performance. In this blog, we'll share maintenance tips, best practices, and schedules to ensure your vehicle runs smoothly, saving you money in the long run.</p>
                        
                    </article>
                    <article id='tabs-3'>
                        <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                        <h4>Navigating the Car Financing Mazen</h4>
                        <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                            27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>
                        <p>Financing your car purchase can be daunting. In this blog, we'll demystify car loans, leasing options, and credit scores. We'll provide you with insights and tips to secure the best financing deal that suits your budget.</p>
                        
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Blog End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Send us a <em>message</em></h2>
                    <p>At our Car Sale website, we value your inquiries and feedback. If you have any questions
                        about our premium pre-owned vehicles, financing options, or any other aspect of our
                        services, don't hesitate to reach out to us.</p>
                    <div class="main-button">
                        <a href="contact.php">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->



<!-- ***** Testimonials Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Read our <em>Testimonials</em></h2>
                    <img src="assets/images/line-dec.png" alt="waves">
                    <p>Curious about our customers' experiences at our Car Sale? Delve into our testimonials to
                        discover the stories of satisfied car buyers.

                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="assets/images/p4.jpg" alt="First One" height="150px">
                        </div>
                        <div class="right-content">
                            <h4>John Smith</h4>
                            <p><em>Hi, I'm John Smith, the proud owner of Ride Time Car Sale. With a deep passion for cars and a commitment to exceptional customer service,</em>
                            </p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="assets/images/p3.jpg" alt="second one" height="100px">
                        </div>
                        <div class="right-content">
                            <h4>Michael Johnson</h4>
                            <p><em>My goal is to ensure that you drive away in the perfect vehicle that meets your needs and budget maintain highest standards quality and transparency in everything</em>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="assets/images/p2.jpg" alt="fourth muscle" height="100px">
                        </div>
                        <div class="right-content">
                            <h4>Emily Davis</h4>
                            <p><em>I am oversees our marketing efforts and manages our online presence, advertising  and keeps you informed about the latest promotions and updates from Ride Time Car Sale.!</em>
                            </p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="assets/images/p1.jpg" alt="training fifth" height="100px">
                        </div>
                        <div class="right-content">
                            <h4>David Brown</h4>
                            <p><em>I am specializes in car financing , works closely with customers to secure the best financing options,loans, and  all necessary paperwork for free financing experience.</em>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <br>

        <div class="main-button text-center">
            <a href="testimonials.php">Read More</a>
        </div>
    </div>
</section>
<!-- ***** Testimonials Item End ***** -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5023542624997520"
     crossorigin="anonymous"></script>
<!-- ishan -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5023542624997520"
     data-ad-slot="4711700427"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- ***** Footer Start ***** -->



<footer>
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-lg-12">
                <p>
                    Copyright © 2023 RIDE TIME CAR SALE
                    - Design by: <a href="https://www.ishanwaruna.com/">Ishan Dilhan</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/mixitup.js"></script>
<script src="assets/js/accordions.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
</body>


</html>